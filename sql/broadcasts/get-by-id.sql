SELECT id,
       name,
       description,
       rejected,
       user_id,
       type_id,
       platform_id,
       deleted,
       created,
       updated
FROM broadcasts
WHERE deleted = :deleted
  AND id = :id;