<?php

namespace App\Models;

use App\Helpers\Conexion;

class Model {

    /**
     * Instancia de conexión
     */
    protected $con;

    /**
     * Nombre de la tabla
     */
    protected $table;

    /**
     * Clave, identificador del modelo un número único por tabla
     */
    protected $primaryKey;

    /**
     * Nombre de las columnas de la tabla
     */
    protected $fillable;

    /**
     * Campos que no se muestran en las consultas SELECT
     */
    protected $hidden;

    public function __construct()
    {
        $this->con = Conexion::getInstance();
    }

    public function find($id)
    {
        $cols = ['*'];

        if (count($this->hidden))
            $cols = $this->fillable;

        $sql = "SELECT ";

        // Recorre todos los campos permitidos
        foreach ($cols as $col) {
            if (!in_array($col, $this->hidden))
                $sql .= $col . ',';
        }

        $sql = substr($sql, 0, -1);
        $sql .= " FROM " . $this->table . " WHERE " . $this->primaryKey . " = ?";

        $model = $this->con->query($sql, [$id['id']], true, true);
        return $model;
    }
}