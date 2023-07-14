create database tst;
use tst;
create table Funcionario (
 Id_Funcionario Int Not null auto_increment primary key ,
 nome_Funcionario varchar(50) Not null  ,
 nascimento_Funcionario datetime Not null  ,
 cadastro_Funcionario timestamp Not null  ,
 genero_Funcionario enum('m','f') Not null  ,
 cpf_Funcionario char(18) Not null  ,
 img_Funicionario longblob null  ,
 login_Funcionario varchar(50) Not null  ,
 senha_Funcionario varchar(50) Not null  ,
 obs_Funcionario varchar(255) null  ,
 status_Funcionario varchar(30) Not null  
);

create table Sesmet (
Id_Sesmet Int Not null auto_increment primary key ,
nome_Sesmet varchar(50) Not null  ,
nascimento_Sesmet datetime Not null  ,
cadastro_Sesmet timestamp Not null  ,
genero_Sesmet enum('m','f') Not null  ,
cpf_Sesmet char(18) Not null  ,
img_Sesmet longblob null  ,
login_Sesmet varchar(50) Not null  ,
senha_Sesmet varchar(50) Not null  ,
obs_Sesmet varchar(255) null  ,
status_Sesmet varchar(30) Not null  
);

create table APR (
Id_APR Int Not null auto_increment primary key ,
Area_APR varchar(30) Not null  ,
Empresa_APR varchar(30) Not null  ,
Setor_APR varchar(30) Not null  ,
Super_APR varchar(30) Not null  ,
Responsaveel_APR varchar(30) Not null  ,
Data_APR date Not null  ,
Horario_Inicio_APR time Not null  ,
Horario_final_APR time Not null  ,
Tipo_atividae_APR varchar(30) Not null  ,
Placa_veiculo_APR varchar(30) Not null  ,
Equipamentos_APR varchar(30) Not null  ,
Grau_de_risco_APR varchar(30) Not null  ,
Servico_executar_APR varchar(30) Not null  ,
Obs_APR varchar(30) Not null  ,
status_APR varchar(30) Not null  
);

create table PET(
Id_PET Int Not null auto_increment primary key ,
nome_PET varchar(50) Not null  ,
local_do_espaço_confinado_PET varchar(50) not null  ,
Espaco_confinado_N_PET varchar(50) not null  ,
Data_e_Hora_Emissao_PET datetime not null  ,
Data_e_Hora_termino_PET datetime not null  ,
trabalho_a_ser_realizado_PET varchar(50) not null  ,
trabalho_autorizado_PET varchar(50) not null  ,
Vigia_PET varchar(50) not null  ,
Equipe_de_resgate_PET varchar(50) not null  ,
Supervisor_de_entrada_PET varchar(50) not null  ,
per1_PET char(4) not null  ,
per2_PET varchar(50) not null  ,
per3_PET char(4) not null  ,
per4_PET char(4) not null  ,
per5_PET char(4) not null  ,
per6_PET varchar(50) not null  ,
per7_PET char(4) not null  ,
per8_PET char(4) not null  ,
per9_PET char(4) not null  ,
per10_PET char(4) not null  ,
per11_PET char(4) not null  ,
per12a_PET varchar(50) not null  ,
per12b_PET varchar(50) not null  ,
per12c_PET varchar(50) not null  ,
per12d_PET varchar(50) not null  ,
per12e_PET varchar(50) not null  ,
per13_PET char(4) not null  ,
per14_PET char(4) not null  ,
per15_PET char(4) not null  ,
per16a_PET char(4) not null  ,
per16b_PET char(4) not null  ,
per16c_PET char(4) not null  ,
per16d_PET char(4) not null  ,
per16e_PET char(4) not null  ,
per17_PET char(4) not null  ,
per18_PET char(4) not null  ,
per19_PET char(4) not null  ,
per20_PET char(4) not null  ,
per21_PET char(4) not null  ,
per22_PET char(4) not null  ,
per23_PET char(4) not null  ,
per24_PET char(4) not null  ,
per25_PET char(4) not null  ,
obs_PET varchar(255) null  ,
status_PET varchar(30) Not null  
);

create table Sugestoes(
Id_Sugestoes Int Not null auto_increment primary key ,
Id_Funcionario_Sugestoes Int Not null  ,
titulo_Sugestoes varchar(50) Not null  ,
descricao_Sugestoes varchar(255) Not null ,
constraint Id_Funcionario_Sugestoes foreign key (Id_Funcionario_Sugestoes) references Funcionario ( Id_Funcionario)
);


create table OS(
Id_OrdemServico Int Not null auto_increment primary key ,
Id_Funcionario_OrdemServico Int Not null  ,
Id_Sesmet_OrdemServico Int Not null  ,
nome_OrdemServico varchar(50) Not null  ,
nr_OrdemServico varchar(50) Not null  ,
descricao_OrdemServico varchar(255) Not null  ,
obs_OrdemServico_va varchar(255) null ,
status_OrdemServico varchar(30) Not null , 
constraint Id_Funcionario_OrdemServico foreign key (Id_Funcionario_OrdemServico) references Funcionario ( Id_Funcionario),
constraint Id_Sesmet_OrdemServico foreign key (Id_Sesmet_OrdemServico) references Sesmet ( Id_Sesmet)
);

create table Nr_10(
Id_Nr10 Int Not null auto_increment primary key ,
Id_APR_Nr10 int Not null  ,
Id_OrdemServico_Nr10 int Not null  ,
Per1_Nr10 char(4) Not null  ,
Per2_Nr10 char(4) Not null  ,
Per3_Nr10 char(4) Not null  ,
Per4_Nr10 char(4) Not null  ,
Per5_Nr10 char(4) Not null  ,
Per6_Nr10 char(4) Not null  ,
Per7_Nr10 char(4) Not null  ,
responsavel_Nr10 Varchar(50) Not null  ,
Assinatura_Nr10 varchar(50) not null  ,
serti_Nr_10 longblob not null  ,
obs_Nr varchar(255) null  ,
status_Nr varchar(30) Not null ,
constraint Id_APR_Nr10 foreign key (Id_APR_Nr10) references APR ( Id_APR),
constraint Id_OrdemServico_Nr10 foreign key (Id_OrdemServico_Nr10) references OS ( Id_OrdemServico)
);

create table Nr_33(
Id_Nr33 Int Not null auto_increment primary key ,
Id_pet_Nr33 int Not null  ,
Id_OrdemServico_Nr33 int Not null  ,
Per1_Nr33 char(4) Not null  ,
Per2_Nr33 char(4) Not null  ,
Per3_Nr33 char(4) Not null  ,
Per4_Nr33 char(4) Not null  ,
Per5_Nr33 char(4) Not null  ,
Per6_Nr33 char(4) Not null  ,
Per7_Nr33 char(4) Not null  ,
Per8_Nr33 char(4) Not null  ,
Per9_Nr33 char(4) Not null  ,
Per10_Nr33 char(4) Not null  ,
responsavel_Nr33 Varchar(50) Not null  ,
Assinatura_Nr33 varchar(50) Not null  ,
serti_Nr33 longblob Not null  ,
obs_Nr33 varchar(255) null  ,
status_Nr33 varchar(30) Not null,
constraint Id_pet_Nr33 foreign key (Id_pet_Nr33) references PET ( Id_PET),
constraint Id_OrdemServico_Nr33 foreign key (Id_OrdemServico_Nr33) references OS ( Id_OrdemServico)
);

