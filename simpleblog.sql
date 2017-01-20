-- 创建数据库
CREATE DATABASE simple_blog CHARSET=UTF8;

-- 说明 数据表的前缀为 blog_

-- 管理员
CREATE TABLE `blog_admin`(
	id int auto_increment ,
	username varchar(30) not null default '',
	password varchar(64) not null default '',
	description varchar(128) not null default '',
	PRIMARY KEY (id)
)charset=utf8;

INSERT INTO `blog_admin` VALUES(NULL,'admin',md5('admin'),'我是PHP小白');
-- 文章
CREATE TABLE `blog_article`(
	article_id INT AUTO_INCREMENT,
	article_title VARCHAR(64) NOT NULL DEFAULT '',
	article_content TEXT NOT NULL,
	article_date INT NOT NULL DEFAULT 0,
	article_img VARCHAR(100) NOT NULL DEFAULT '',
	PRIMARY KEY(article_id)
)charset=utf8;

-- 分类

CREATE TABLE `blog_category`(
	cat_id int AUTO_INCREMENT,
	cat_name varchar(30) DEFAULT NULL,
	cat_no int NOT NULL DEFAULT 0,
	PRIMARY KEY(cat_id)
)charset=utf8;