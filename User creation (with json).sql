SET @json= 
'{
"user_name":"felix",
"user_firstname":"Arcelin",
"user_mail":"felix.arcelin@viacesi.fr",
"user_password":"motdepasse",
"user_connection_status":"0",
"user_center":"Arras",
"user_status":"étudiant"
}';
SET @name= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_name'));
SET @firstname= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_firstname'));
SET @mail= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_mail'));
SET @password= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_password'));
SET @connection_status= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_connection_status'));
SET @center= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_center'));
SET @status= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.user_status'));

INSERT INTO bddpw.user (user_name, user_firstname, user_mail, user_password, user_connection_status, Id_center, Id_profile)
VALUES (@name, @firstname, @mail, @password, 0, (Select Id_center From center where center_name = 'Arras'),
(Select Id_profile From profile where name_profile = 'étudiant'));
SELECT * FROM bddpw.user;