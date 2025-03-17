SELECT id,
       name,
       description,
       deleted,
       created,
       updated
FROM types
WHERE deleted = :deleted;