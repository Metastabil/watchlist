SELECT id,
       username,
       password,
       administrator,
       deleted,
       created,
       updated
FROM users
WHERE deleted = :deleted
  AND id = :id;