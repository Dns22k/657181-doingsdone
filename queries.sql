use bd_dela;
--Add user data
INSERT INTO Users (date_reg, name, passwd, email) VALUES ('2017-10-21','denis','123321','kird@mail.ru'), ('2011-11-01','inna','123321','inna@mail.ru'), ('2011-08-22','dima','123321','dima@inbox.ru'), ('2018-05-21','Pasha','123321','pavel123@mail.ru');
--Add projects
INSERT INTO Projects (name_project) VALUES ('Работа'), ('Учеба'), ('Входящие'), ('Разное'),('Дом');
--Add project data
INSERT INTO Tasks (name_task, user_id, date_create, date_alarm, project_id) VALUES ('Собеседование в IT компании','3','2018-05-21','2018-06-21','1'), ('Выполнить тестовое задание','2','2018-03-01','2018-04-21','2'), ('Сделать задание первого раздела','2','2018-05-01','2018-05-29','2'), ('Встреча с другом','3','2018-05-22','2018-05-22','4'), ('Купить корм для кота','1','2018-04-01','2018-05-21','5'), ('Заказать пиццу','2','2018-03-01','2018-05-04','4'), ('Посадить дерево','1','2018-03-01','2018-05-04','1'), ('Настроить архивацию','1','2018-03-01','2018-05-04','4');

--Список из проектов для одного пользователя
select date_create, name_task, u.email, u.name from Projects p left join Tasks t on p.id=t.id left join Users u on t.user_id=u.id where u.name='dima';
-- select *  from Projects p join Users u on u.id = p.user_id where u.name='dima';
--select *  from Projects p join Users u on u.id = p.user_id where u.name='dima';
--Список из задач для одного проекта
select *  from Tasks t join Projects p on p.id = t.project_id where p.name_project='Работа';
--Добавляем дату завершения задачи т.е. выполнена
update Tasks set date_done='2018-04-20 13:06:00' where name_task='Выполнить тестовое задание';
--получить задачи для завтрашнего дня 
select * from Tasks where date_alarm=DATE_ADD(NOW(),INTERVAL 1 DAY);
--Обновить название задачи по идентификатору
update Tasks set name_task='Купить корм для скота' where id='5';
--Тестовые запросы к БД
select * from Projects p left join Tasks t on p.id=t.id left join Users u on t.user_id=u.id;
select * from Projects p left join Tasks t on p.id=t.id left join Users u on t.user_id=u.id where u.name='dima';



