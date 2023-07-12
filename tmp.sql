-- Comment on post

DELIMITER //
DROP PROCEDURE IF EXISTS newComment;
create procedure newComment(IN iid int(20),
                            IN ipost_id int(20),
                            IN comment_id int(20),
                            IN comment_type varchar(3),
                            IN comment_ref int(20),
                            IN comment_type varchar(127),
                            IN dsk varchar(55),
                            OUT outmsg varchar(25))
BEGIN
    DECLARE requestexist int(10);
    DECLARE dskCheck VARCHAR(55);
    DECLARE to_user VARCHAR(55);
    
    select v.db_transaction_security_key into dskCheck from variables v WHERE v.id = 1;
    select po.user_id into to_user from posts po where po.id = ipost_id and po.soft_del = 0;
    select count(*) into requestexist from reactions re where re.user_id = iid and re.post_id = ipost_id;

    if (dskCheck = dsk) Then
        SET outmsg = '0';
        if (requestexist > 0) THEN
            UPDATE
                reactions re
            SET re.vote= ivote
              , re.updated_at= now()
            WHERE re.post_id = ipost_id
              and re.user_id = iid;
            SET outmsg = '2';
        ELSE
            INSERT INTO reactions (user_id,
                                   vote,
                                   post_id,
                                   created_at)
            VALUES (iid, ivote, ipost_id, now());
            SET outmsg = '1';
        END if;
    else
        SET outmsg = 'DSS:1101 Wrong DSK';
    end if;
END;
//
DELIMITER ;

--  END  Reaction on post