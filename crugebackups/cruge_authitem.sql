-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sima
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cruge_authitem`
--

DROP TABLE IF EXISTS `cruge_authitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cruge_authitem`
--

LOCK TABLES `cruge_authitem` WRITE;
/*!40000 ALTER TABLE `cruge_authitem` DISABLE KEYS */;
INSERT INTO `cruge_authitem` VALUES ('action_administracion_ajustarcuentas',0,'',NULL,'N;'),('action_administracion_index',0,'',NULL,'N;'),('action_administracion_ivaxpagar',0,'',NULL,'N;'),('action_administrativo_agregarorden',0,'',NULL,'N;'),('action_administrativo_create',0,'',NULL,'N;'),('action_administrativo_deny',0,'',NULL,'N;'),('action_administrativo_index',0,'',NULL,'N;'),('action_app_error',0,'',NULL,'N;'),('action_app_view',0,'',NULL,'N;'),('action_article_admin',0,'',NULL,'N;'),('action_article_create',0,'',NULL,'N;'),('action_article_delete',0,'',NULL,'N;'),('action_article_index',0,'',NULL,'N;'),('action_article_update',0,'',NULL,'N;'),('action_article_view',0,'',NULL,'N;'),('action_cargosCuentaPaciente_index',0,'',NULL,'N;'),('action_cargosCuentaPaciente_view',0,'',NULL,'N;'),('action_cargos_index',0,'',NULL,'N;'),('action_catAlmacen_admin',0,'',NULL,'N;'),('action_catAlmacen_index',0,'',NULL,'N;'),('action_catCompany_create',0,'',NULL,'N;'),('action_catEntidad_admin',0,'',NULL,'N;'),('action_catEntidad_create',0,'',NULL,'N;'),('action_catentidad_delete',0,'',NULL,'N;'),('action_catEntidad_index',0,'',NULL,'N;'),('action_catentidad_update',0,'',NULL,'N;'),('action_catentidad_updateeditable',0,'',NULL,'N;'),('action_catentidad_view',0,'',NULL,'N;'),('action_catMarcaCelular_create',0,'',NULL,'N;'),('action_catMarcaCelular_view',0,'',NULL,'N;'),('action_catMarcaMonitor_create',0,'',NULL,'N;'),('action_catMarcaMonitor_updateEditable',0,'',NULL,'N;'),('action_catMarcaMonitor_view',0,'',NULL,'N;'),('action_catMarca_admin',0,'',NULL,'N;'),('action_catMarca_create',0,'',NULL,'N;'),('action_catMarca_updateEditable',0,'',NULL,'N;'),('action_catSoftware_admin',0,'',NULL,'N;'),('action_catSoftware_create',0,'',NULL,'N;'),('action_catSoftware_delete',0,'',NULL,'N;'),('action_catSoftware_update',0,'',NULL,'N;'),('action_catSoftware_updateEditable',0,'',NULL,'N;'),('action_catSoftware_view',0,'',NULL,'N;'),('action_catTelefoniaCelular_admin',0,'',NULL,'N;'),('action_catTelefoniaCelular_create',0,'',NULL,'N;'),('action_catTelefoniaCelular_index',0,'',NULL,'N;'),('action_catTelefoniaCelular_update',0,'',NULL,'N;'),('action_catTipoPlanCelular_create',0,'',NULL,'N;'),('action_catTipoSoporte_admin',0,'',NULL,'N;'),('action_catTipoSoporte_create',0,'',NULL,'N;'),('action_compras_default_index',0,'',NULL,'N;'),('action_compras_proveedor_admin',0,'',NULL,'N;'),('action_compras_proveedor_create',0,'',NULL,'N;'),('action_compras_proveedor_delete',0,'',NULL,'N;'),('action_compras_proveedor_index',0,'',NULL,'N;'),('action_compras_proveedor_update',0,'',NULL,'N;'),('action_compras_proveedor_updateeditable',0,'',NULL,'N;'),('action_compras_proveedor_view',0,'',NULL,'N;'),('action_configuracion_default_index',0,'',NULL,'N;'),('action_equipoComputo_admin',0,'',NULL,'N;'),('action_equipoComputo_almacenesPorEntidad',0,'','','N;'),('action_equipoComputo_create',0,'',NULL,'N;'),('action_equipoComputo_createForm',0,'',NULL,'N;'),('action_equipoComputo_garcaMonitorList',0,'','','N;'),('action_equipoComputo_getMarcaList',0,'',NULL,'N;'),('action_equipoComputo_getProveedorSistemasList',0,'',NULL,'N;'),('action_equipoComputo_getTipoEquipoList',0,'',NULL,'N;'),('action_equipoComputo_index',0,'',NULL,'N;'),('action_equipoComputo_printLabel',0,'','','N;'),('action_equipoComputo_update',0,'',NULL,'N;'),('action_equipoComputo_updateEditable',0,'',NULL,'N;'),('action_equipoComputo_updateForm',0,'',NULL,'N;'),('action_equipoComputo_view',0,'',NULL,'N;'),('action_insidesite_error',0,'',NULL,'N;'),('action_insidesite_index',0,'',NULL,'N;'),('action_insidesite_logout',0,'',NULL,'N;'),('action_insidesite_rolling',0,'',NULL,'N;'),('action_ordenesSoporte_activarOrden',0,'','','N;'),('action_ordenesSoporte_admin',0,'',NULL,'N;'),('action_ordenesSoporte_almacenesPorEntidad',0,'','','N;'),('action_ordenesSoporte_create',0,'',NULL,'N;'),('action_ordenesSoporte_delete',0,'',NULL,'N;'),('action_ordenesSoporte_getTipoSoporteList',0,'',NULL,'N;'),('action_ordenesSoporte_index',0,'',NULL,'N;'),('action_ordenesSoporte_mobileAdmin',0,'','','N;'),('action_ordenesSoporte_save',0,'',NULL,'N;'),('action_ordenesSoporte_scan',0,'','','N;'),('action_ordenesSoporte_update',0,'',NULL,'N;'),('action_ordenesSoporte_updateEditable',0,'',NULL,'N;'),('action_ordenesSoporte_view',0,'',NULL,'N;'),('action_post_admin',0,'',NULL,'N;'),('action_post_create',0,'',NULL,'N;'),('action_post_delete',0,'',NULL,'N;'),('action_post_index',0,'',NULL,'N;'),('action_post_suggesttags',0,'',NULL,'N;'),('action_post_update',0,'',NULL,'N;'),('action_post_view',0,'',NULL,'N;'),('action_proveedores_admin',0,'',NULL,'N;'),('action_proveedores_create',0,'',NULL,'N;'),('action_proveedores_delete',0,'',NULL,'N;'),('action_proveedores_index',0,'',NULL,'N;'),('action_proveedores_update',0,'',NULL,'N;'),('action_proveedores_updateeditable',0,'',NULL,'N;'),('action_proveedores_view',0,'',NULL,'N;'),('action_serviciosinstitucionales_default_index',0,'',NULL,'N;'),('action_site_contact',0,'',NULL,'N;'),('action_site_error',0,'',NULL,'N;'),('action_site_excel',0,'',NULL,'N;'),('action_site_excel2',0,'',NULL,'N;'),('action_site_index',0,'',NULL,'N;'),('action_site_login',0,'',NULL,'N;'),('action_site_logout',0,'',NULL,'N;'),('action_telefoniaCelular_admin',0,'',NULL,'N;'),('action_telefoniaCelular_create',0,'',NULL,'N;'),('action_telefoniaCelular_getMarcaCelularList',0,'',NULL,'N;'),('action_telefoniaCelular_index',0,'',NULL,'N;'),('action_telefoniaCelular_update',0,'',NULL,'N;'),('action_ui_editprofile',0,'',NULL,'N;'),('action_ui_fieldsadmincreate',0,'',NULL,'N;'),('action_ui_fieldsadminlist',0,'',NULL,'N;'),('action_ui_rbacajaxassignment',0,'',NULL,'N;'),('action_ui_rbacajaxsetchilditem',0,'',NULL,'N;'),('action_ui_rbacauthitemchilditems',0,'',NULL,'N;'),('action_ui_rbacauthitemcreate',0,'',NULL,'N;'),('action_ui_rbacauthitemdelete',0,'',NULL,'N;'),('action_ui_rbacauthitemupdate',0,'',NULL,'N;'),('action_ui_rbaclistops',0,'',NULL,'N;'),('action_ui_rbaclistroles',0,'',NULL,'N;'),('action_ui_rbaclisttasks',0,'',NULL,'N;'),('action_ui_rbacusersassignments',0,'',NULL,'N;'),('action_ui_sessionadmin',0,'',NULL,'N;'),('action_ui_sessionadmindelete',0,'',NULL,'N;'),('action_ui_systemupdate',0,'',NULL,'N;'),('action_ui_usermanagementadmin',0,'',NULL,'N;'),('action_ui_usermanagementcreate',0,'',NULL,'N;'),('action_ui_usermanagementupdate',0,'',NULL,'N;'),('action_usersmodulosgenerales_admin',0,'',NULL,'N;'),('action_usersmodulosgenerales_create',0,'',NULL,'N;'),('action_usersmodulosgenerales_delete',0,'',NULL,'N;'),('action_usersmodulosgenerales_index',0,'',NULL,'N;'),('action_usersmodulosgenerales_loadcities',0,'',NULL,'N;'),('action_usersmodulosgenerales_update',0,'',NULL,'N;'),('action_usersmodulosgenerales_view',0,'',NULL,'N;'),('action_usuariosSima_admin',0,'',NULL,'N;'),('action_usuariosSima_copiarACruge',0,'',NULL,'N;'),('action_usuariosSima_index',0,'',NULL,'N;'),('action_usuarios_admin',0,'',NULL,'N;'),('action_usuarios_create',0,'',NULL,'N;'),('action_usuarios_delete',0,'',NULL,'N;'),('action_usuarios_getStatuses',0,'',NULL,'N;'),('action_usuarios_getStatusList',0,'',NULL,'N;'),('action_usuarios_index',0,'',NULL,'N;'),('action_usuarios_update',0,'',NULL,'N;'),('action_usuarios_updateEditable',0,'',NULL,'N;'),('action_usuarios_view',0,'',NULL,'N;'),('admin',0,'',NULL,'N;'),('controller_administracion',0,'',NULL,'N;'),('controller_administrativo',0,'',NULL,'N;'),('controller_app',0,'',NULL,'N;'),('controller_article',0,'',NULL,'N;'),('controller_cargos',0,'',NULL,'N;'),('controller_catentidad',0,'',NULL,'N;'),('controller_compras_default',0,'',NULL,'N;'),('controller_compras_proveedor',0,'',NULL,'N;'),('controller_configuracion_default',0,'',NULL,'N;'),('controller_insidesite',0,'',NULL,'N;'),('controller_post',0,'',NULL,'N;'),('controller_proveedores',0,'',NULL,'N;'),('controller_serviciosinstitucionales_default',0,'',NULL,'N;'),('controller_site',0,'',NULL,'N;'),('controller_usersmodulosgenerales',0,'',NULL,'N;'),('controller_usuarios',0,'',NULL,'N;'),('cruge_access',1,'Permisos de cruge','','N;'),('edit-advanced-profile-features',0,'/var/www/yii/testdrive/protected/modules/cruge/views/ui/usermanagementupdate.php linea 114',NULL,'N;'),('Invitado',2,'','','N;'),('SistemaCapturista',2,'Editar catálogos, realizar incidencias, dar de alta equipos','','N;'),('SistemasOperador',2,'Leer catálogos y dar de alta incidencias','','N;'),('sysadmin',2,'','','N;'),('tarea_test_uno',1,'','','N;');
/*!40000 ALTER TABLE `cruge_authitem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-12 10:23:46