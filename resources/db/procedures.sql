delimiter //
drop procedure if exists praffaire ;
create procedure praffaire()
begin
select a.name nameAffaire,nomber,a.id  ,c.name nameClient,u.name nameUser,jugement,jugementDate,etat,type
from affaires a
         left join clients c
                   on a.id_client = c.id
         left join users u
                   on a.id_user = u.id ;

end //

delimiter ;





delimiter //
drop procedure if exists prTaches ;
create procedure prTaches()
begin
select t.id id_tache, titre, lalarme, TacheF, a.name, DTache, t.created_at, t.updated_at
from taches t
         left outer join affaires a
                         on t.id_affaire = a.id ;

end //

delimiter ;








delimiter  //
drop trigger  if exists  after_insert_user ;
create trigger  after_insert_user after insert
    on users for each row
begin
    INSERT INTO cabinet_avocat_new.colors (id_user, textHeader, bgHeader, textMain, bgMain, created_at, updated_at, textBtn,
                                           bgBtn)
    VALUES (new.id, '#FFD700', '#000000', '#FFD700', '#000000', null, null, '#FFD700', '#000000');
end //
DELIMITER ;

use cabinet_avocat_new ;

delimiter //
drop procedure if exists praffaire ;
create procedure praffaire()
begin
select a.name nameAffaire,nomber,a.id  ,c.name nameClient,u.name nameUser,jugement,jugementDate,etat,type
from affaires a
         left join clients c
                   on a.id_client = c.id
         left join users u
                   on a.id_user = u.id ;

end //

delimiter ;


call prTaches();


delimiter //
drop procedure if exists prTaches ;
create procedure prTaches()
begin
select t.id id_tache, titre, lalarme, TacheF, a.name, DTache, t.created_at, t.updated_at
from taches t
         left outer join affaires a
                         on t.id_affaire = a.id ;

end //

delimiter ;


alter  table  clients
    add column  name varchar(40) ;

alter table colors
drop column hoverList ;


delimiter  //
drop trigger  if exists  after_insert_user ;
create trigger  after_insert_user after insert
    on users for each row
begin
    INSERT INTO colors (id_user, textHeader, bgHeader, textMain, bgMain, created_at, updated_at, textBtn,
                        bgBtn, imageBody, imageProfil)
    VALUES (new.id, 'gold', 'black', 'black', 'gray', null, null, 'black', 'gold', 'istockphoto-1143525474-170667a.jpg', 'backgourndmain.png');

end //
DELIMITER ;


delimiter  //
drop trigger  if exists  before_delete_user ;
create trigger  before_delete_user before delete
    on users for each row
begin
    delete  from colors where  old.id = id_user ;
    delete  from affaires where id_user = OLD.id ;
end //
DELIMITER ;




delimiter  //
drop trigger  if exists  before_delete_affaire ;
create trigger  before_delete_affaire before delete
    on affaires for each row
begin
    delete  from taches where  old.id = id_affaire ;

end //
DELIMITER ;





delimiter  //
drop PROCEDURE  if exists  notifiction ;
create procedure  notifiction(in id_tache int)
begin
        declare  Vdate datetime ;
        set Vdate = (select  DTache from taches where id = id_tache) ;

    if(now() - 1 > Vdate - 1000000) then

update  taches
set lalarme = true
where id = id_tache ;
end if ;
end //
DELIMITER ;




delimiter  //
drop PROCEDURE  if exists  notifiction_tache_t ;
create procedure  notifiction_tache_t(in id_tache int)
begin
        declare  Vdate datetime ;
        set Vdate = (select  DTache from taches where id = id_tache) ;

    if(now() - 1000000 > Vdate -1 ) then

update  taches
set TacheF = true
where id = id_tache ;
end if ;
end //
DELIMITER ;


CALL notifiction(14) ;


select  now() - 1000000 ;

alter table taches
    modify  column  DTache datetime ;

update  taches
set lalarme = true
where id = 14 ;
