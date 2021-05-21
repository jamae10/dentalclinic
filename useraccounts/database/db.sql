CREATE TABLE 'users' (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'firstname' varchar(100) NOT NULL,
    'lastname' varchar(100) NOT NULL,
    'email' varchar(100) NOT NULL,
    'password' varchar(50) NOT NULL,
    'role' enum('user','admin') NOT NULL,
    PRIMARY KEY (id)    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'user_clients' (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'firstname' varchar(100) NOT NULL,
    'lastname' varchar(100) NOT NULL,
    'email' varchar(100) NOT NULL,
    'password' varchar(50) NOT NULL,
    'phone' int(13) NOT NULL,
    'gender' enum('Male','Female') NOT NULL,
    'address' varchar(300) NOT NULL,   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 'users' ('id','firstname','lastname','email','password','role')
VALUES (1,'admin','admin','admin@mail.co','admin123','admin');