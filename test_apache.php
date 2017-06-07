<?php

echo 'aaaaaaaaa';
echo phpinfo();

?>

create table visit_counter(id int, ip varchar(30),l_date date,l_time time);


ALTER TABLE visit_counter ALTER COLUMN id SET DEFAULT nextval('seq_visit_counter');

insert into visit_counter(ip,browser) values ('2')


select * from visit_counter