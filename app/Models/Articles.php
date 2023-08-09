<?php

namespace Aruka\Models;

use Aruka\Model;

class Articles extends Model
{
    public function getArticleById(int $id): array
    {
        $query = 'SELECT *
                  FROM articles
                  WHERE id = :id
                  LIMIT 1';
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->result();
    }

    public function getArticleBySlug(string $slug): array
    {
        $query = 'SELECT *
                  FROM `articles`
                  WHERE `slug` = :slug
                  LIMIT 1';
        $this->db->query($query);
        $this->db->bind(':slug', $slug);
        return $this->db->result();
    }
}
