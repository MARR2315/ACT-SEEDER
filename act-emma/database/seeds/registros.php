<?php
use App\Models\registross;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class registros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigo = ['1000','1010','1020', '1030', '1040', '1049', '1050', '1060', '1070', '1080', '1089', '1090', '1100', '1109','1110','1120','1125','1130','1139','1140','1150','1160','1170','1180','1200','1210','1219','1220','1230','1239','1240','1250','1259','1260','1269','1270','1275','1276','1278','1279','1280','1285','1289','1290','1296','1298','1299','1310','1320','1330'];
        $asentamiento = ['06 de Abril','1 de Diciembre','1 de Marzo','1 de Mayo','1 de Mayo F-97','1 de Mayo Playón','1 de Septiembre','1 de Septiembre','10 de Abril','10 de Agosto','10 de Diciembre','10 de Junio','10 de Marzo','10 de Mayo','10 de Mayo La Matanza','10 de Octubre','103m','11 Cuartos','11 de Abril','11 de Febrero','11 de Julio','11 de Julio 1a Sección','11 de Julio 2a Sección','11 de Julio 3a Sección','11 de Mayo','11 de Octubre','11 de Septiembre','11 Pueblos','12 de Diciembre','12 de Diciembre Sombreretillo','12 de Julio','12 de Junio','12 de Marzo','12 de Marzo Parte Alta','12 de Mayo','12 de Noviembre','12 de Octubre','12 de Septiembre','12 Región Zona Militar','13k','13 de Abril','13 de Febrero','13 de Julio','13 de Junio','13 de Mayo','13 de Septiembre','14 de Diciembre','14 de Febrero','14 de Julio'];
        $tipo_asenta = ['Aeropuerto','Ampliación','Barrio','Campamento','Colonia','Condominio','Congregación','Conjunto habitacional','Ejido','Equipamiento','Estación','Exhacienda','Finca','Fraccionamiento','Gran usuario','Granja','Hacienda','Paraje', 'Parque industrial','Poblado comunal','Pueblo','Puerto','Ranchería','Rancho','Residencial','Unidad habitacional','Villa','Zona comercial','Zona federal','Zona industrial','Zona militar','Zona naval'];
        $municipio =['Abasolo','Abejones','Acacoyagua','Acajete','Acala','Acámbaro','Acambay de Ruíz Castañeda','Acapetahua','Acaponeta','Acapulco de Juárez','Acateno','Acatepec','Acatic','Acatlán','Acatlán de Juárez','Acatlán de Pérez Figueroa','Acatzingo','Acaxochitlán','Acolman','Acteopan','Actopan','Acuitzio','Aculco','Acuña','Agua Blanca de Iturbide','Agualeguas','Aguascalientes','Aguililla','Ahuacatlán','Ahuacuotzingo','Ahualulco de Mercado','Ahuatlán','Ahuazotepec','Ahuehuetitla','Ahumada','Ajacuba','Ajalpan','Ajuchitlán del Progreso','Albino Zertuche','Alcozauca de Guerrero','Aldama','Alfajayucan','Aljojuca','Allende','Almoloya','Almoloya de Alquisiras','Almoloya de Juárez','Almoloya del Río','Alpoyeca','Altamirano'];
        $estado =['Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Ciudad de México','Coahuila de Zaragoza','Colima','Durango','Guanajuato','Guerrero','Hidalgo','Jalisco','México','Michoacán de Ocampo','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro'];
        $ciudad =['Abasolo','Acala','Acámbaro','Acaponeta','Acapulco de Juárez','Acatlán de Juárez','Acatlán de Osorio','Actopan','Aguascalientes','Ahuacatlán','Ahualulco de Mercado','Ajijic','Allende','Almoloya de Juárez','Amatepec','Ameca','Amozoc','Anáhuac','Apan','Apaseo el Alto','Apaseo el Grande','Apatzingán de la Constitución','Arandas','Arcelia','Arriaga','Arteaga','Asientos','Asunción Nochixtlán','Atlixco','Atotonilco el Alto','Atoyac de Álvarez','Autlán de Navarro','Ayutla de los Libres','Azoyú','Bachíniva','Bahias de Huatulco','Bucerías','Buenavista de Cuéllar','Cabo San Lucas','Cacahoatán','Cadereyta Jiménez','Calkini','Calvillo','Canatlán','Candelaria','Capulhuac','Castaños','Celaya','Chahuites'];
         for($i=0;$i < 100200;$i++){
          DB::table('codigos_postales')->insert([
           'codigo' => $codigo[rand(0,50)],
           'asentamiento' => $asentamiento[rand(0,50)],
           'tipo_asenta' => $tipo_asenta[rand(0,50)],
           'municipio' => $municipio[rand(0,50)],
           'estado' => $estado[rand(0,50)],
           'ciudad' => $ciudad[rand(0,50)],
        ]);
    }
}
}
