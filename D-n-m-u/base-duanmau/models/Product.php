<?php
    class Product extends BaseModel {

        public function getAll() {
            // Bảng danh mục là `category`
            $sql = "SELECT p.*, cat.name as cat_name FROM `products` as p
             JOIN category as cat 
             ON p.category_id = cat.id ORDER BY p.id DESC;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        // Hàm xoá dữ liệu 
        public function delete($id) {
            $sql = "DELETE FROM products WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([":id" => $id]);
        }

        // Hàm tìm bằng id
        public function find($id){
            $sql = "SELECT * FROM products WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([":id" => $id]);
            return $stmt->fetch();
        }

        // Hàm thêm dữ liệu
        public function insert($data) {
            $sql = "INSERT INTO `products` 
                (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `img`)
                VALUES (NULL, :category_id, :name, :description, :price, :quantity, :image)";

            $stmt = $this->pdo->prepare($sql);

            // bind dữ liệu vào tham số
            $stmt->bindParam(":category_id",$data["category_id"]);
            $stmt->bindParam(":name",$data["name"]);
            $stmt->bindParam(":description",$data["description"]);
            $stmt->bindParam(":price",$data["price"]);
            $stmt->bindParam(":quantity",$data["quantity"]);
            // Cột `img` trong DB là NOT NULL, dùng chuỗi rỗng nếu chưa upload
            $stmt->bindParam(":image",$data["image"]);

            $stmt->execute();
        }
    }
?>
