SELECT id,
       name,
       description,
       deleted,
       created,
       updated
FROM platforms
WHERE deleted = :deleted;