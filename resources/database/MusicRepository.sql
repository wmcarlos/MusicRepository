CREATE TABLE mr_configurations(
	name varchar(60) not null default 'Music Repository',
	show_logo enum('Y','N')  not null default 'N',
	logo varchar(60) null,
	contact text null,
	terms_and_conditions text null,
	facebook_link varchar(100) null,
	twitter_link varchar(100) null,
	google_plus_link varchar(100) null,
	instagram_link varchar(100) null,
	google_play_link varchar(255) null,
	apple_store_link varchar(255) null
)engine = InnoDB;

CREATE TABLE mr_categories(
	category_id int auto_increment not null,
	name varchar(60) not null,
	avatar varchar(100) not null,
	constraint pk_category_id primary key (category_id) 
) engine = InnoDB;

CREATE TABLE mr_artists(
	artist_id int auto_increment not null,
	name varchar(150) not null,
	avatar varchar(100) not null,
	constraint pk_artist_id primary key (artist_id)
)engine = InnoDB;

CREATE TABLE mr_users(
	user_id int auto_increment not null,
	name varchar(60) not null,
	email varchar(255) not null,
	password varchar(100) not null,
	avatar varchar(100) null,
	soruce_method enum('facebook','twitter','google','email') not null default 'email',
	source_id int null,
	code_verification varchar(100) not null,
	created timestamp not null default current_timestamp,
	updated timestamp null,
	phone varchar(30) null,
	role enum('administrator','viewer') not null default 'viewer',
	status enum('without_confirmation','active','password_change') not null default 'without_confirmation',
	constraint pk_user_id primary key (user_id)
);

CREATE TABLE mr_sounds(
	sound_id int auto_increment not null,
	category_id int not null,
	title varchar(60) not null,
	source_type enum('remote','local') not null default 'remote',
	url varchar(255) not null,
	letter text null,
	duration time not null,
	constraint pk_sound_id primary key (sound_id),
	constraint fk_category_id foreign key (category_id) references mr_categories (category_id) on update cascade on delete restrict
)engine = InnoDB;

CREATE TABLE mr_sound_artists(
	sound_artist_id int auto_increment not null,
	artist_id int not null,
	sound_id int not null,
	constraint pk_sound_artist_id primary key (sound_artist_id),
	constraint fk_artist_id foreign key (artist_id) references mr_artists (artist_id) on update cascade on delete cascade,
	constraint fk_sound_id foreign key (sound_id) references mr_sounds (sound_id) on update cascade on delete cascade
)engine = InnoDB;

CREATE TABLE mr_favorites(
	favorite_id int auto_increment not null,
	user_id int not null,
	sound_id int not null,
	added timestamp not null default  current_timestamp,
	constraint pk_favorite_id primary key (favorite_id),
	constraint fk_user_id foreign key (user_id) references mr_users (user_id) on update cascade on delete restrict,
	constraint fk_sound_id_1 foreign key (sound_id) references mr_sounds (sound_id) on update cascade on delete restrict
)engine = InnoDB;