<?php
    class Category extends BaseModel {

        // Bảng trong DB là `category` (không có s) theo file SQL
        public function getAll() {
            $sql = "SELECT * FROM category";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }