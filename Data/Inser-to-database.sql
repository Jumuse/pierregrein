/* TABLE RESTAURANT */
INSERT INTO restaurant ( id, name, address )
VALUES ( 1, 'Quai Antique', '25 Chemin des Camélias 73000 Chambéry');

/* TABLE USERS */
INSERT INTO users (id, email, password, telephone, name, is_allergic, allergy_type, possesses)
VALUES (1, 'admin@admin.com', 'iuhrfiuzogp6269864', 0672587914, 'admin1', false, NULL, 1);

/* TABLE ADMIN */
INSERT INTO admin (is_admin, works_for, user_id)
VALUES (true, 1, 1);

INSERT INTO admin (is_admin, works_for, user_id)
VALUES (true, 1, 1);

/* TABLE CARTE */
INSERT INTO carte (id, title, category, description, price, is_dealt_by)
VALUES (1, 'salade test', 'salades', 'une salade', 11.50, 1 );

/* TABLE PHOTOS */
INSERT INTO photos (name, title, description, displayed_in)
VALUES ('bowl.jpg', 'Nos Salades', 'Salades', 1);

/* TABLE TIMETABLES */
INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (1, '12:00:00', '14:00:00', NULL, NULL, 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (2, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (3, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (4, NULL, NULL, NULL, NULL, 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (5, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (6, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (7, NULL, NULL, '19:00:00', '23:00:00', 1, 1);
