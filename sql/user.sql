SELECT * FROM user;
INSERT INTO user (nickname,password,name,surname,email,profilepic) VALUES ('tomik','tomik','uwu','uwu','email',load_file('C:\\ZZZ My files\\SITE-v2\\img\\default.jpg')),('ron','123','ja','ty','on',load_file('C:\\ZZZ My files\\SITE-v2\\img\\default.jpg')),('david','k','k','k','k',load_file('C:\\ZZZ My files\\SITE-v2\\img\\default.jpg'));
DELETE FROM user WHERE iduser >=0;