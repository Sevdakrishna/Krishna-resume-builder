<?php


    class Database {
        private $connection;
    
        function __construct() {
            try {
                $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    
        // Generates placeholders for the values
        private function getLabels($values) {
            return implode(',', array_fill(0, count($values), '?'));
        }
    
        // Determines the data types for the bind_param method
        private function getBindParmsDataType($values) {
            $types = '';
            foreach ($values as $value) {
                if (is_int($value)) {
                    $types .= 'i';
                } elseif (is_double($value)) {
                    $types .= 'd';
                } elseif (is_string($value)) {
                    $types .= 's';
                } else {
                    $types .= 'b';
                }
            }
            return $types;
        }
    
        public function clean($data) {
            return $this->connection->real_escape_string($data);
        }
    
        public function insert($table, $columns, $values) {
            // Prepare the placeholders for the prepared statement
            $label = $this->getLabels($values);
    
            // Construct the SQL query
            $query = "INSERT INTO $table($columns) VALUES($label)";
    
            // Prepare the statement
            $obj = $this->connection->prepare($query);
    
            // Check if the statement preparation was successful
            if ($obj === false) {
                // Log error if needed
                return false;
            }
    
            // Bind the parameters
            $obj->bind_param($this->getBindParmsDataType($values), ...$values);
    
            // Execute the statement and check if it was successful
            if ($obj->execute()) {
                return true;
            } else {
                // Log error if needed
                return false;
            }
        }
    
        public function read($table, $columns, $conditions) {
            $query = "SELECT $columns FROM $table $conditions";
            $result = $this->connection->query($query);
            return $result->fetch_all(true);
        }
    
        public function delete($table, $condition) {
            $query = "DELETE FROM $table WHERE $condition";
            return $this->connection->query($query);
        }
    
        private function getLabelsWithNames($columns) {
            $label = "";
            $columns = explode(",", $columns);
            foreach ($columns as $column) {
                $label .= $column . '=?,';
            }
            $label = substr_replace($label, "", -1);
            return $label;
        }
    
        public function update($table, $columns, $values, $condition) {
            $labels = $this->getLabelsWithNames($columns);
            $query = "UPDATE $table SET $labels WHERE $condition";
            $obj = $this->connection->prepare($query);
            if (!$obj) {
                throw new Exception("Failed to prepare the SQL statement.");
            }
            $obj->bind_param($this->getBindParmsDataType($values), ...$values);
            $obj->execute();
            return $obj->affected_rows > 0; // Return true if rows were affected
        }
        
        public function fetch($query, $params) {
            $obj = $this->connection->prepare($query);
            if (!$obj) {
                throw new Exception("Failed to prepare the SQL statement.");
            }
            if (!empty($params)) {
                $obj->bind_param($this->getBindParmsDataType($params), ...$params);
            }
            $obj->execute();
            $result = $obj->get_result();
            return $result->fetch_assoc();
        }
    }
    