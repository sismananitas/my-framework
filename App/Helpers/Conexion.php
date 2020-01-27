<?php

namespace App\Helpers;

class Conexion {
    private static $instance;
    private $db;
    private $stmt;

    private function __construct() {
        $database = getenv('DB_ENGINE') . ':dbname=' . getenv('DB_NAME') . ';host=' . getenv('DB_HOST') . ';';

        try {
            // CREA UN OBJETO PDO
            $obj_pdo = new \PDO(
                $database,
                getenv('DB_USER'),
                getenv('DB_PASSWORD'),
                getenv('DB_OPTIONS')
            );
            $this->db = $obj_pdo;

        } catch (\PDOException $e) {
            die('Error en la conexión. ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new Conexion;
        }
        return self::$instance;
    }

    public function query($sql, $params = [], $select = false) {
        $response = false;
        $this->stmt = $this->db->prepare($sql);
        $response = $this->stmt->execute($params);

        if ($select) {
            $response = $this->stmt->fetchAll(\PDO::FETCH_CLASS, get_called_class());
            
        } else {
            $response = $this->rowCount();
        }
        return $response;
    }

    /**
     * OBTIENE EL ÚLTIMO ID INSERTADO
     */
    public function lastInsertId() {
        return $this->db->lastInsertId();
    }

    /**
     * COMIENSA UNA TRANSACCIÓN
     */
    public function beginTransaction() {
        $this->db->beginTransaction();
    }

    /**
     * COMMIT A LA TRANSACCIÓN
     */
    public function commit() {
        $this->db->commit();
    }

    /**
     * ROLLBACK A LA TRANSACCIÓN
     */
    public function rollBack() {
        $this->db->rollBack();
    }

    /**
     * DEVUELVE EL NÚMERO DE COLUMNAS AFECTADAS
     */
    public function rowCount() {
        $this->stmt->rowCount();
    }
} // Fin de la clase