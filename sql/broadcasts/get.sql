SELECT id,
       name,
       description,
       rejected,
       user_id,
       type_id,
       platform_id,
       deleted,
       created,
       updated,
       type,
       platform,
       user
FROM v_broadcasts
WHERE deleted = :deleted;