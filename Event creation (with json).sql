SET @json= 
'{
"event_name":"Repas Exiamiam",
"event_description":"Pôt de départ des A5",
"event_date":"2019-01-25",
"event_location":"Cafétéria",
"event_status":"Approbation",
"id_user":"3"
}';
SET @name= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.event_name'));
SET @description= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.event_description'));
SET @date= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.event_date'));
SET @location= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.event_location'));
SET @status= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.event_status'));
SET @creator= TRIM(BOTH '"' FROM JSON_EXTRACT(@json, '$.id_user'));

INSERT INTO bddpw.event (event_name, event_description, event_date, event_location, id_user, id_status)
VALUES (@name, @description, @date, @location, @creator, (SELECT id_status FROM status_event WHERE name_status = @status));
SELECT * FROM bddpw.event;