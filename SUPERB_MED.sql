create table "SUPERB_MED".users_details
(
    id         serial
        primary key,
    legal_name varchar(100) not null
);

alter table "SUPERB_MED".users_details
    owner to postgres;

create table "SUPERB_MED".users
(
    id              serial
        primary key,
    email           varchar(255)      not null,
    password        varchar(255)      not null,
    id_user_details integer default 0 not null
        constraint details_users___fk
            references "SUPERB_MED".users_details
            on update cascade on delete cascade
);

alter table "SUPERB_MED".users
    owner to postgres;

create table "SUPERB_MED".personnel
(
    id             serial
        primary key,
    title          varchar(100) not null,
    description    text         not null,
    specialisation varchar(100) not null,
    "like"         integer default 0,
    dislike        integer default 0,
    created_at     date,
    id_assigned_by integer      not null
        constraint personnel_users_id_fk
            references "SUPERB_MED".users
            on update cascade on delete cascade,
    image          varchar(255)
);

alter table "SUPERB_MED".personnel
    owner to postgres;

create table "SUPERB_MED".users_personnel
(
    id_user      integer not null
        constraint user_users_personnel___fk
            references "SUPERB_MED".users
            on update cascade on delete cascade,
    id_personnel integer not null
        constraint personnel_users_personnel___fk
            references "SUPERB_MED".personnel
            on update cascade on delete cascade
);

alter table "SUPERB_MED".users_personnel
    owner to postgres;

create table "SUPERB_MED".enquiries
(
    id                 serial
        primary key,
    contact_legal_name varchar(100) not null,
    contact_phone      varchar(20)  not null,
    contact_email      varchar(255) not null,
    contact_topic      varchar(100) not null,
    contact_message    text         not null,
    contact_created_at date         not null
);

alter table "SUPERB_MED".enquiries
    owner to postgres;

create table "SUPERB_MED".users_tokens
(
    id               serial
        primary key,
    selector         varchar(255) not null,
    hashed_validator varchar(255) not null,
    user_id          integer      not null
        constraint user_users_tokens___fk
            references "SUPERB_MED".users
            on delete cascade,
    expiry           date         not null
);

alter table "SUPERB_MED".users_tokens
    owner to postgres;

