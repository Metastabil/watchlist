UPDATE broadcasts SET name = :name,
                      description = :description,
                      rejected = :rejected,
                      user_id = :user_id,
                      type_id = :type_id,
                      platform_id = :platform_id,
                      deleted = :deleted
WHERE id = :id;