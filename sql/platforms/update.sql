UPDATE platforms SET name = :name,
                     description = :description,
                     deleted = :deleted
WHERE id = :id;