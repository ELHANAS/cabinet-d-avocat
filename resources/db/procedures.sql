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
