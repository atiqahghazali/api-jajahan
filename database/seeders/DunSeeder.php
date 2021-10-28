<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duns')->insert([
            /*
            * tiada
            */
            // ['id' => '00000', 'parliament_id' => '00000', 'kerusi_id' => 'N.00', 'state_id' => '00', 'name' => 'TIADA DATA'],
            /*
            * perlis
            */
            ['id' => '00101', 'parliament_id' => '00100', 'kerusi_id' => 'N.01', 'state_id' => '09', 'name' => 'TITI TINGGI'],
            ['id' => '00102', 'parliament_id' => '00100', 'kerusi_id' => 'N.02', 'state_id' => '09', 'name' => 'BESERI'],
            ['id' => '00103', 'parliament_id' => '00100', 'kerusi_id' => 'N.03', 'state_id' => '09', 'name' => 'CHUPING'],
            ['id' => '00104', 'parliament_id' => '00100', 'kerusi_id' => 'N.04', 'state_id' => '09', 'name' => 'MATA AYER'],
            ['id' => '00105', 'parliament_id' => '00100', 'kerusi_id' => 'N.05', 'state_id' => '09', 'name' => 'SANTAN'],

            ['id' => '00206', 'parliament_id' => '00200', 'kerusi_id' => 'N.06', 'state_id' => '09', 'name' => 'BINTONG'],
            ['id' => '00207', 'parliament_id' => '00200', 'kerusi_id' => 'N.07', 'state_id' => '09', 'name' => 'SENA'],
            ['id' => '00208', 'parliament_id' => '00200', 'kerusi_id' => 'N.08', 'state_id' => '09', 'name' => 'INDERA KAYANGAN'],
            ['id' => '00209', 'parliament_id' => '00200', 'kerusi_id' => 'N.09', 'state_id' => '09', 'name' => 'KUALA PERLIS'],
            ['id' => '00210', 'parliament_id' => '00200', 'kerusi_id' => 'N.10', 'state_id' => '09', 'name' => 'KAYANG'],

            ['id' => '00311', 'parliament_id' => '00300', 'kerusi_id' => 'N.11', 'state_id' => '09', 'name' => 'PAUH'],
            ['id' => '00312', 'parliament_id' => '00300', 'kerusi_id' => 'N.12', 'state_id' => '09', 'name' => 'TAMBUN TULANG'],
            ['id' => '00313', 'parliament_id' => '00300', 'kerusi_id' => 'N.13', 'state_id' => '09', 'name' => 'GUAR SANJI'],
            ['id' => '00314', 'parliament_id' => '00300', 'kerusi_id' => 'N.14', 'state_id' => '09', 'name' => 'SIMPANG EMPAT'],
            ['id' => '00315', 'parliament_id' => '00300', 'kerusi_id' => 'N.15', 'state_id' => '09', 'name' => 'SANGLANG'],
            /*
            * kedah
            */
            ['id' => '00401', 'parliament_id' => '00400', 'kerusi_id' => 'N.01', 'state_id' => '02', 'name' => 'AYER HANGAT'], //2003: PADANG MATSIRAT
            ['id' => '00402', 'parliament_id' => '00400', 'kerusi_id' => 'N.02', 'state_id' => '02', 'name' => 'KUAH'],
            ['id' => '00503', 'parliament_id' => '00500', 'kerusi_id' => 'N.03', 'state_id' => '02', 'name' => 'KOTA SIPUTEH'], //2003: AYER HITAM
            ['id' => '00504', 'parliament_id' => '00500', 'kerusi_id' => 'N.04', 'state_id' => '02', 'name' => 'AYER HITAM'], //2003: KOTA SIPUTEH
            ['id' => '00605', 'parliament_id' => '00600', 'kerusi_id' => 'N.05', 'state_id' => '02', 'name' => 'BUKIT KAYU HITAM'], //TUNJANG
            ['id' => '00606', 'parliament_id' => '00600', 'kerusi_id' => 'N.06', 'state_id' => '02', 'name' => 'JITRA'],

            ['id' => '00707', 'parliament_id' => '00700', 'kerusi_id' => 'N.07', 'state_id' => '02', 'name' => 'KUALA NERANG'],
            ['id' => '00708', 'parliament_id' => '00700', 'kerusi_id' => 'N.08', 'state_id' => '02', 'name' => 'PEDU'],

            ['id' => '00809', 'parliament_id' => '00800', 'kerusi_id' => 'N.09', 'state_id' => '02', 'name' => 'BUKIT LADA'],
            ['id' => '00810', 'parliament_id' => '00800', 'kerusi_id' => 'N.10', 'state_id' => '02', 'name' => 'BUKIT PINANG'], //2003: LANGGAR
            ['id' => '00811', 'parliament_id' => '00800', 'kerusi_id' => 'N.11', 'state_id' => '02', 'name' => 'DERGA'], //2003: TANJONG SERI

            ['id' => '00912', 'parliament_id' => '00900', 'kerusi_id' => 'N.12', 'state_id' => '02', 'name' => 'SUKA MENANTI'], //2003: DERGA //2013: BAKAR RATA
            ['id' => '00913', 'parliament_id' => '00900', 'kerusi_id' => 'N.13', 'state_id' => '02', 'name' => 'KOTA DARUL AMAN'],
            ['id' => '00914', 'parliament_id' => '00900', 'kerusi_id' => 'N.14', 'state_id' => '02', 'name' => 'ALOR MENGKUDU'], //2003: ALOR MERAH

            ['id' => '01015', 'parliament_id' => '01000', 'kerusi_id' => 'N.15', 'state_id' => '02', 'name' => 'ANAK BUKIT'],
            ['id' => '01016', 'parliament_id' => '01000', 'kerusi_id' => 'N.16', 'state_id' => '02', 'name' => 'KUBANG ROTAN'],
            ['id' => '01017', 'parliament_id' => '01000', 'kerusi_id' => 'N.17', 'state_id' => '02', 'name' => 'PENGKALAN KUNDOR'],

            ['id' => '01118', 'parliament_id' => '01100', 'kerusi_id' => 'N.18', 'state_id' => '02', 'name' => 'TOKAI'], //2003: BUKIT RAYA
            ['id' => '01119', 'parliament_id' => '01100', 'kerusi_id' => 'N.19', 'state_id' => '02', 'name' => 'SUNGAI TIANG'],

            ['id' => '01220', 'parliament_id' => '01200', 'kerusi_id' => 'N.20', 'state_id' => '02', 'name' => 'SUNGAI LIMAU'], //2003: SALA
            ['id' => '01221', 'parliament_id' => '01200', 'kerusi_id' => 'N.21', 'state_id' => '02', 'name' => 'GUAR CHEMPEDAK'],
            ['id' => '01222', 'parliament_id' => '01200', 'kerusi_id' => 'N.22', 'state_id' => '02', 'name' => 'GURUN'], //2003: null

            // ['id' => '01322', 'parliament_id' => '01300', 'kerusi_id' => 'N.22', 'state_id' => '02', 'name' => 'BELANTEK'], //2003
            ['id' => '01323', 'parliament_id' => '01300', 'kerusi_id' => 'N.23', 'state_id' => '02', 'name' => 'BELANTEK'], //2003: JENERI
            ['id' => '01324', 'parliament_id' => '01300', 'kerusi_id' => 'N.24', 'state_id' => '02', 'name' => 'JENERI'], //2003: BUKIT SELAMBAU

            ['id' => '01425', 'parliament_id' => '01400', 'kerusi_id' => 'N.25', 'state_id' => '02', 'name' => 'BUKIT SELAMBAU'], //2003: GURUN
            ['id' => '01426', 'parliament_id' => '01400', 'kerusi_id' => 'N.26', 'state_id' => '02', 'name' => 'TANJONG DAWAI'],

            ['id' => '01527', 'parliament_id' => '01500', 'kerusi_id' => 'N.27', 'state_id' => '02', 'name' => 'PANTAI MERDEKA'],
            ['id' => '01528', 'parliament_id' => '01500', 'kerusi_id' => 'N.28', 'state_id' => '02', 'name' => 'BAKAR ARANG'],
            ['id' => '01529', 'parliament_id' => '01500', 'kerusi_id' => 'N.29', 'state_id' => '02', 'name' => 'SIDAM'],

            ['id' => '01630', 'parliament_id' => '01600', 'kerusi_id' => 'N.30', 'state_id' => '02', 'name' => 'BAYU'],
            ['id' => '01631', 'parliament_id' => '01600', 'kerusi_id' => 'N.31', 'state_id' => '02', 'name' => 'KUPANG'],
            ['id' => '01632', 'parliament_id' => '01600', 'kerusi_id' => 'N.32', 'state_id' => '02', 'name' => 'KUALA KETIL'],

            ['id' => '01733', 'parliament_id' => '01700', 'kerusi_id' => 'N.33', 'state_id' => '02', 'name' => 'MERBAU PULAS'],
            ['id' => '01734', 'parliament_id' => '01700', 'kerusi_id' => 'N.34', 'state_id' => '02', 'name' => 'LUNAS'],

            ['id' => '01835', 'parliament_id' => '01800', 'kerusi_id' => 'N.35', 'state_id' => '02', 'name' => 'KULIM'],
            ['id' => '01836', 'parliament_id' => '01800', 'kerusi_id' => 'N.36', 'state_id' => '02', 'name' => 'BANDAR BAHARU'],
            /*
            * kelantan
            */
            ['id' => '01901', 'parliament_id' => '01900', 'kerusi_id' => 'N.01', 'state_id' => '03', 'name' => 'PENGKALAN KUBOR'],
            ['id' => '01902', 'parliament_id' => '01900', 'kerusi_id' => 'N.02', 'state_id' => '03', 'name' => 'KELABORAN'],
            ['id' => '01903', 'parliament_id' => '01900', 'kerusi_id' => 'N.03', 'state_id' => '03', 'name' => 'PASIR PEKAN'],
            ['id' => '01904', 'parliament_id' => '01900', 'kerusi_id' => 'N.04', 'state_id' => '03', 'name' => 'WAKAF BHARU'], //2003: null

            
            ['id' => '02005', 'parliament_id' => '02000', 'kerusi_id' => 'N.05', 'state_id' => '03', 'name' => 'KIJANG'],
            ['id' => '02006', 'parliament_id' => '02000', 'kerusi_id' => 'N.06', 'state_id' => '03', 'name' => 'CHEMPAKA'],
            ['id' => '02007', 'parliament_id' => '02000', 'kerusi_id' => 'N.07', 'state_id' => '03', 'name' => 'PANCHOR'],

            ['id' => '02108', 'parliament_id' => '02100', 'kerusi_id' => 'N.08', 'state_id' => '03', 'name' => 'TANJONG MAS'],
            ['id' => '02109', 'parliament_id' => '02100', 'kerusi_id' => 'N.09', 'state_id' => '03', 'name' => 'KOTA LAMA'],
            ['id' => '02110', 'parliament_id' => '02100', 'kerusi_id' => 'N.10', 'state_id' => '03', 'name' => 'BUNUT PAYONG'],

            ['id' => '02211', 'parliament_id' => '02200', 'kerusi_id' => 'N.11', 'state_id' => '03', 'name' => 'TENDONG'],
            ['id' => '02212', 'parliament_id' => '02200', 'kerusi_id' => 'N.12', 'state_id' => '03', 'name' => 'PENGKALAN PASIR'],
            ['id' => '02213', 'parliament_id' => '02200', 'kerusi_id' => 'N.13', 'state_id' => '03', 'name' => 'MERANTI'], //2013: CHETOK

            ['id' => '02314', 'parliament_id' => '02300', 'kerusi_id' => 'N.14', 'state_id' => '03', 'name' => 'CHETOK'], //2013: MERANTI
            ['id' => '02315', 'parliament_id' => '02300', 'kerusi_id' => 'N.15', 'state_id' => '03', 'name' => 'GUAL PERIOK'],
            ['id' => '02316', 'parliament_id' => '02300', 'kerusi_id' => 'N.16', 'state_id' => '03', 'name' => 'APAM PUTRA'], //2013: BUKIT TUKU

            ['id' => '02417', 'parliament_id' => '02400', 'kerusi_id' => 'N.17', 'state_id' => '03', 'name' => 'SALOR'],
            ['id' => '02418', 'parliament_id' => '02400', 'kerusi_id' => 'N.18', 'state_id' => '03', 'name' => 'PASIR TUMBOH'],
            ['id' => '02419', 'parliament_id' => '02400', 'kerusi_id' => 'N.19', 'state_id' => '03', 'name' => 'DEMIT'],

            ['id' => '02520', 'parliament_id' => '02500', 'kerusi_id' => 'N.20', 'state_id' => '03', 'name' => 'TAWANG'],
            ['id' => '02521', 'parliament_id' => '02500', 'kerusi_id' => 'N.21', 'state_id' => '03', 'name' => 'PANTAI IRAMA'], //2013: PERUPOK
            ['id' => '02522', 'parliament_id' => '02500', 'kerusi_id' => 'N.22', 'state_id' => '03', 'name' => 'JELAWAT'],

            ['id' => '02623', 'parliament_id' => '02600', 'kerusi_id' => 'N.23', 'state_id' => '03', 'name' => 'MELOR'],
            ['id' => '02624', 'parliament_id' => '02600', 'kerusi_id' => 'N.24', 'state_id' => '03', 'name' => 'KADOK'],
            ['id' => '02625', 'parliament_id' => '02600', 'kerusi_id' => 'N.25', 'state_id' => '03', 'name' => 'KOK LANAS'],

            ['id' => '02726', 'parliament_id' => '02700', 'kerusi_id' => 'N.26', 'state_id' => '03', 'name' => 'BUKIT PANAU'],
            ['id' => '02727', 'parliament_id' => '02700', 'kerusi_id' => 'N.27', 'state_id' => '03', 'name' => 'GUAL IPOH'],
            ['id' => '02728', 'parliament_id' => '02700', 'kerusi_id' => 'N.28', 'state_id' => '03', 'name' => 'KEMAHANG'],

            ['id' => '02829', 'parliament_id' => '02800', 'kerusi_id' => 'N.29', 'state_id' => '03', 'name' => 'SELISING'],
            ['id' => '02830', 'parliament_id' => '02800', 'kerusi_id' => 'N.30', 'state_id' => '03', 'name' => 'LIMBONGAN'],
            ['id' => '02831', 'parliament_id' => '02800', 'kerusi_id' => 'N.31', 'state_id' => '03', 'name' => 'SEMERAK'],
            ['id' => '02832', 'parliament_id' => '02800', 'kerusi_id' => 'N.32', 'state_id' => '03', 'name' => 'GAAL'],

            ['id' => '02933', 'parliament_id' => '02900', 'kerusi_id' => 'N.33', 'state_id' => '03', 'name' => 'PULAI CHONDONG'],
            ['id' => '02934', 'parliament_id' => '02900', 'kerusi_id' => 'N.34', 'state_id' => '03', 'name' => 'TEMANGAN'],
            ['id' => '02935', 'parliament_id' => '02900', 'kerusi_id' => 'N.35', 'state_id' => '03', 'name' => 'KEMUNING'],

            ['id' => '03036', 'parliament_id' => '03000', 'kerusi_id' => 'N.36', 'state_id' => '03', 'name' => 'BUKIT BUNGA'],
            ['id' => '03037', 'parliament_id' => '03000', 'kerusi_id' => 'N.37', 'state_id' => '03', 'name' => 'AIR LANAS'],
            ['id' => '03038', 'parliament_id' => '03000', 'kerusi_id' => 'N.38', 'state_id' => '03', 'name' => 'KUALA BALAH'],

            ['id' => '03139', 'parliament_id' => '03100', 'kerusi_id' => 'N.39', 'state_id' => '03', 'name' => 'MENGKEBANG'],
            ['id' => '03140', 'parliament_id' => '03100', 'kerusi_id' => 'N.40', 'state_id' => '03', 'name' => 'GUCHIL'],
            ['id' => '03141', 'parliament_id' => '03100', 'kerusi_id' => 'N.41', 'state_id' => '03', 'name' => 'MANEK URAI'],
            ['id' => '03142', 'parliament_id' => '03100', 'kerusi_id' => 'N.42', 'state_id' => '03', 'name' => 'DABONG'],

            ['id' => '03243', 'parliament_id' => '03200', 'kerusi_id' => 'N.43', 'state_id' => '03', 'name' => 'NENGGIRI'],
            ['id' => '03244', 'parliament_id' => '03200', 'kerusi_id' => 'N.44', 'state_id' => '03', 'name' => 'PALOH'],
            ['id' => '03245', 'parliament_id' => '03200', 'kerusi_id' => 'N.45', 'state_id' => '03', 'name' => 'GALAS'],
            /*
            * terengganu
            */
            ['id' => '03301', 'parliament_id' => '03300', 'kerusi_id' => 'N.01', 'state_id' => '11', 'name' => 'KUALA BESUT'],
            ['id' => '03302', 'parliament_id' => '03300', 'kerusi_id' => 'N.02', 'state_id' => '11', 'name' => 'KOTA PUTERA'],
            ['id' => '03303', 'parliament_id' => '03300', 'kerusi_id' => 'N.03', 'state_id' => '11', 'name' => 'JERTIH'],
            ['id' => '03304', 'parliament_id' => '03300', 'kerusi_id' => 'N.04', 'state_id' => '11', 'name' => 'HULU BESUT'],

            ['id' => '03405', 'parliament_id' => '03400', 'kerusi_id' => 'N.05', 'state_id' => '11', 'name' => 'JABI'],
            ['id' => '03406', 'parliament_id' => '03400', 'kerusi_id' => 'N.06', 'state_id' => '11', 'name' => 'PERMAISURI'],
            ['id' => '03407', 'parliament_id' => '03400', 'kerusi_id' => 'N.07', 'state_id' => '11', 'name' => 'LANGKAP'],
            ['id' => '03408', 'parliament_id' => '03400', 'kerusi_id' => 'N.08', 'state_id' => '11', 'name' => 'BATU RAKIT'],

            ['id' => '03509', 'parliament_id' => '03500', 'kerusi_id' => 'N.09', 'state_id' => '11', 'name' => 'TEPUH'],
            ['id' => '03510', 'parliament_id' => '03500', 'kerusi_id' => 'N.10', 'state_id' => '11', 'name' => 'BULUH GADING'], //2013: TELUK PASU
            ['id' => '03511', 'parliament_id' => '03500', 'kerusi_id' => 'N.11', 'state_id' => '11', 'name' => 'SEBERANG TAKIR'],
            ['id' => '03512', 'parliament_id' => '03500', 'kerusi_id' => 'N.12', 'state_id' => '11', 'name' => 'BUKIT TUNGGAL'],

            ['id' => '03613', 'parliament_id' => '03600', 'kerusi_id' => 'N.13', 'state_id' => '11', 'name' => 'WAKAF MEMPELAM'],
            ['id' => '03614', 'parliament_id' => '03600', 'kerusi_id' => 'N.14', 'state_id' => '11', 'name' => 'BANDAR'],
            ['id' => '03615', 'parliament_id' => '03600', 'kerusi_id' => 'N.15', 'state_id' => '11', 'name' => 'LADANG'],
            ['id' => '03616', 'parliament_id' => '03600', 'kerusi_id' => 'N.16', 'state_id' => '11', 'name' => 'BATU BURUK'],

            ['id' => '03717', 'parliament_id' => '03700', 'kerusi_id' => 'N.17', 'state_id' => '11', 'name' => 'ALUR LIMBAT'],
            ['id' => '03718', 'parliament_id' => '03700', 'kerusi_id' => 'N.18', 'state_id' => '11', 'name' => 'BUKIT PAYUNG'],
            ['id' => '03719', 'parliament_id' => '03700', 'kerusi_id' => 'N.19', 'state_id' => '11', 'name' => 'RU RENDANG'],
            ['id' => '03720', 'parliament_id' => '03700', 'kerusi_id' => 'N.20', 'state_id' => '11', 'name' => 'PENGKALAN BERANGAN'],

            ['id' => '03821', 'parliament_id' => '03800', 'kerusi_id' => 'N.21', 'state_id' => '11', 'name' => 'TELEMUNG'],
            ['id' => '03822', 'parliament_id' => '03800', 'kerusi_id' => 'N.22', 'state_id' => '11', 'name' => 'MANIR'],
            ['id' => '03823', 'parliament_id' => '03800', 'kerusi_id' => 'N.23', 'state_id' => '11', 'name' => 'KUALA BERANG'],
            ['id' => '03824', 'parliament_id' => '03800', 'kerusi_id' => 'N.24', 'state_id' => '11', 'name' => 'AJIL'],

            ['id' => '03925', 'parliament_id' => '03900', 'kerusi_id' => 'N.25', 'state_id' => '11', 'name' => 'BUKIT BESI'],
            ['id' => '03926', 'parliament_id' => '03900', 'kerusi_id' => 'N.26', 'state_id' => '11', 'name' => 'RANTAU ABANG'],
            ['id' => '03927', 'parliament_id' => '03900', 'kerusi_id' => 'N.27', 'state_id' => '11', 'name' => 'SURA'],
            ['id' => '03928', 'parliament_id' => '03900', 'kerusi_id' => 'N.28', 'state_id' => '11', 'name' => 'PAKA'],

            ['id' => '04029', 'parliament_id' => '04000', 'kerusi_id' => 'N.29', 'state_id' => '11', 'name' => 'KEMASIK'],
            ['id' => '04030', 'parliament_id' => '04000', 'kerusi_id' => 'N.30', 'state_id' => '11', 'name' => 'KIJAL'],
            ['id' => '04031', 'parliament_id' => '04000', 'kerusi_id' => 'N.31', 'state_id' => '11', 'name' => 'CUKAI'],
            ['id' => '04032', 'parliament_id' => '04000', 'kerusi_id' => 'N.32', 'state_id' => '11', 'name' => 'AIR PUTIH'],
            /*
            * pulau pinang
            */
            ['id' => '04101', 'parliament_id' => '04100', 'kerusi_id' => 'N.01', 'state_id' => '07', 'name' => 'PENAGA'],
            ['id' => '04102', 'parliament_id' => '04100', 'kerusi_id' => 'N.02', 'state_id' => '07', 'name' => 'BERTAM'],
            ['id' => '04103', 'parliament_id' => '04100', 'kerusi_id' => 'N.03', 'state_id' => '07', 'name' => 'PINANG TUNGGAL'],

            ['id' => '04204', 'parliament_id' => '04200', 'kerusi_id' => 'N.04', 'state_id' => '07', 'name' => 'PERMATANG BERANGAN'],
            ['id' => '04205', 'parliament_id' => '04200', 'kerusi_id' => 'N.05', 'state_id' => '07', 'name' => 'SUNGAI DUA'],
            ['id' => '04206', 'parliament_id' => '04200', 'kerusi_id' => 'N.06', 'state_id' => '07', 'name' => 'TELOK AYER TAWAR'],

            ['id' => '04307', 'parliament_id' => '04300', 'kerusi_id' => 'N.07', 'state_id' => '07', 'name' => 'SUNGAI PUYU'],
            ['id' => '04308', 'parliament_id' => '04300', 'kerusi_id' => 'N.08', 'state_id' => '07', 'name' => 'BAGAN JERMAL'],
            ['id' => '04309', 'parliament_id' => '04300', 'kerusi_id' => 'N.09', 'state_id' => '07', 'name' => 'BAGAN DALAM'],

            ['id' => '04410', 'parliament_id' => '04400', 'kerusi_id' => 'N.10', 'state_id' => '07', 'name' => 'SEBERANG JAYA'],
            ['id' => '04411', 'parliament_id' => '04400', 'kerusi_id' => 'N.11', 'state_id' => '07', 'name' => 'PERMATANG PASIR'],
            ['id' => '04412', 'parliament_id' => '04400', 'kerusi_id' => 'N.12', 'state_id' => '07', 'name' => 'PENANTI'],

            ['id' => '04513', 'parliament_id' => '04500', 'kerusi_id' => 'N.13', 'state_id' => '07', 'name' => 'BERAPIT'],
            ['id' => '04514', 'parliament_id' => '04500', 'kerusi_id' => 'N.14', 'state_id' => '07', 'name' => 'MACHANG BUBUK'],
            ['id' => '04515', 'parliament_id' => '04500', 'kerusi_id' => 'N.15', 'state_id' => '07', 'name' => 'PADANG LALANG'],

            ['id' => '04616', 'parliament_id' => '04600', 'kerusi_id' => 'N.16', 'state_id' => '07', 'name' => 'PERAI'],
            ['id' => '04617', 'parliament_id' => '04600', 'kerusi_id' => 'N.17', 'state_id' => '07', 'name' => 'BUKIT TENGAH'],
            ['id' => '04618', 'parliament_id' => '04600', 'kerusi_id' => 'N.18', 'state_id' => '07', 'name' => 'BUKIT TAMBUN'],

            ['id' => '04719', 'parliament_id' => '04700', 'kerusi_id' => 'N.19', 'state_id' => '07', 'name' => 'JAWI'],
            ['id' => '04720', 'parliament_id' => '04700', 'kerusi_id' => 'N.20', 'state_id' => '07', 'name' => 'SUNGAI BAKAP'],
            ['id' => '04721', 'parliament_id' => '04700', 'kerusi_id' => 'N.21', 'state_id' => '07', 'name' => 'SUNGAI ACHEH'],

            ['id' => '04822', 'parliament_id' => '04800', 'kerusi_id' => 'N.22', 'state_id' => '07', 'name' => 'TANJONG BUNGA'],
            ['id' => '04823', 'parliament_id' => '04800', 'kerusi_id' => 'N.23', 'state_id' => '07', 'name' => 'AIR PUTIH'],
            ['id' => '04824', 'parliament_id' => '04800', 'kerusi_id' => 'N.24', 'state_id' => '07', 'name' => 'KEBUN BUNGA'],
            ['id' => '04825', 'parliament_id' => '04800', 'kerusi_id' => 'N.25', 'state_id' => '07', 'name' => 'PULAU TIKUS'],

            ['id' => '04926', 'parliament_id' => '04900', 'kerusi_id' => 'N.26', 'state_id' => '07', 'name' => 'PADANG KOTA'],
            ['id' => '04927', 'parliament_id' => '04900', 'kerusi_id' => 'N.27', 'state_id' => '07', 'name' => 'PENGKALAN KOTA'],
            ['id' => '04928', 'parliament_id' => '04900', 'kerusi_id' => 'N.28', 'state_id' => '07', 'name' => 'KOMTAR'],

            ['id' => '05029', 'parliament_id' => '05000', 'kerusi_id' => 'N.29', 'state_id' => '07', 'name' => 'DATOK KERAMAT'],
            ['id' => '05030', 'parliament_id' => '05000', 'kerusi_id' => 'N.30', 'state_id' => '07', 'name' => 'SUNGAI PINANG'],
            ['id' => '05031', 'parliament_id' => '05000', 'kerusi_id' => 'N.31', 'state_id' => '07', 'name' => 'BATU LANCANG'],

            ['id' => '05132', 'parliament_id' => '05100', 'kerusi_id' => 'N.32', 'state_id' => '07', 'name' => 'SERI DELIMA'],
            ['id' => '05133', 'parliament_id' => '05100', 'kerusi_id' => 'N.33', 'state_id' => '07', 'name' => 'AIR ITAM'],
            ['id' => '05134', 'parliament_id' => '05100', 'kerusi_id' => 'N.34', 'state_id' => '07', 'name' => 'PAYA TERUBONG'],

            ['id' => '05235', 'parliament_id' => '05200', 'kerusi_id' => 'N.35', 'state_id' => '07', 'name' => 'BATU UBAN'],
            ['id' => '05236', 'parliament_id' => '05200', 'kerusi_id' => 'N.36', 'state_id' => '07', 'name' => 'PANTAI JEREJAK'],
            ['id' => '05237', 'parliament_id' => '05200', 'kerusi_id' => 'N.37', 'state_id' => '07', 'name' => 'BATU MAUNG'],

            ['id' => '05338', 'parliament_id' => '05300', 'kerusi_id' => 'N.38', 'state_id' => '07', 'name' => 'BAYAN LEPAS'],
            ['id' => '05339', 'parliament_id' => '05300', 'kerusi_id' => 'N.39', 'state_id' => '07', 'name' => 'PULAU BETONG'],
            ['id' => '05340', 'parliament_id' => '05300', 'kerusi_id' => 'N.40', 'state_id' => '07', 'name' => 'TELOK BAHANG'],
            /*
            * perak
            */
            ['id' => '05401', 'parliament_id' => '05400', 'kerusi_id' => 'N.01', 'state_id' => '08', 'name' => 'PENGKALAN HULU'],
            ['id' => '05402', 'parliament_id' => '05400', 'kerusi_id' => 'N.02', 'state_id' => '08', 'name' => 'TEMENGOR'],

            ['id' => '05503', 'parliament_id' => '05500', 'kerusi_id' => 'N.03', 'state_id' => '08', 'name' => 'KENERING'],
            ['id' => '05504', 'parliament_id' => '05500', 'kerusi_id' => 'N.04', 'state_id' => '08', 'name' => 'KOTA TAMPAN'],

            ['id' => '05605', 'parliament_id' => '05600', 'kerusi_id' => 'N.05', 'state_id' => '08', 'name' => 'SELAMA'],
            ['id' => '05606', 'parliament_id' => '05600', 'kerusi_id' => 'N.06', 'state_id' => '08', 'name' => 'KUBU GAJAH'],
            ['id' => '05607', 'parliament_id' => '05600', 'kerusi_id' => 'N.07', 'state_id' => '08', 'name' => 'BATU KURAU'],

            ['id' => '05708', 'parliament_id' => '05700', 'kerusi_id' => 'N.08', 'state_id' => '08', 'name' => 'TITI SERONG'],
            ['id' => '05709', 'parliament_id' => '05700', 'kerusi_id' => 'N.09', 'state_id' => '08', 'name' => 'KUALA KURAU'],

            ['id' => '05810', 'parliament_id' => '05800', 'kerusi_id' => 'N.10', 'state_id' => '08', 'name' => 'ALOR PONGSU'],
            ['id' => '05811', 'parliament_id' => '05800', 'kerusi_id' => 'N.11', 'state_id' => '08', 'name' => 'GUNONG SEMANGGOL'],
            ['id' => '05812', 'parliament_id' => '05800', 'kerusi_id' => 'N.12', 'state_id' => '08', 'name' => 'SELINSING'],

            ['id' => '05913', 'parliament_id' => '05900', 'kerusi_id' => 'N.13', 'state_id' => '08', 'name' => 'KUALA SAPETANG'],
            ['id' => '05914', 'parliament_id' => '05900', 'kerusi_id' => 'N.14', 'state_id' => '08', 'name' => 'CHANGKAT JERING'],
            ['id' => '05915', 'parliament_id' => '05900', 'kerusi_id' => 'N.15', 'state_id' => '08', 'name' => 'TRONG'],

            ['id' => '06016', 'parliament_id' => '06000', 'kerusi_id' => 'N.16', 'state_id' => '08', 'name' => 'KAMUNTING'],
            ['id' => '06017', 'parliament_id' => '06000', 'kerusi_id' => 'N.17', 'state_id' => '08', 'name' => 'POKOK ASSAM'],
            ['id' => '06018', 'parliament_id' => '06000', 'kerusi_id' => 'N.18', 'state_id' => '08', 'name' => 'AULONG'],

            ['id' => '06119', 'parliament_id' => '06100', 'kerusi_id' => 'N.19', 'state_id' => '08', 'name' => 'CHENDEROH'],
            ['id' => '06120', 'parliament_id' => '06100', 'kerusi_id' => 'N.20', 'state_id' => '08', 'name' => 'LUBOK MERBAU'],

            ['id' => '06221', 'parliament_id' => '06200', 'kerusi_id' => 'N.21', 'state_id' => '08', 'name' => 'LINTANG'],
            ['id' => '06222', 'parliament_id' => '06200', 'kerusi_id' => 'N.22', 'state_id' => '08', 'name' => 'JALONG'],

            ['id' => '06323', 'parliament_id' => '06300', 'kerusi_id' => 'N.23', 'state_id' => '08', 'name' => 'MANJOI'],
            ['id' => '06324', 'parliament_id' => '06300', 'kerusi_id' => 'N.24', 'state_id' => '08', 'name' => 'HULU KINTA'],

            ['id' => '06425', 'parliament_id' => '06400', 'kerusi_id' => 'N.25', 'state_id' => '08', 'name' => 'CANNING'],
            ['id' => '06426', 'parliament_id' => '06400', 'kerusi_id' => 'N.26', 'state_id' => '08', 'name' => 'TEBING TINGGI'],
            ['id' => '06427', 'parliament_id' => '06400', 'kerusi_id' => 'N.27', 'state_id' => '08', 'name' => 'PASIR PINJI'],

            ['id' => '06528', 'parliament_id' => '06500', 'kerusi_id' => 'N.28', 'state_id' => '08', 'name' => 'BERCHAM'],
            ['id' => '06529', 'parliament_id' => '06500', 'kerusi_id' => 'N.29', 'state_id' => '08', 'name' => 'KEPAYANG'],
            ['id' => '06530', 'parliament_id' => '06500', 'kerusi_id' => 'N.30', 'state_id' => '08', 'name' => 'BUNTONG'],

            ['id' => '06631', 'parliament_id' => '06600', 'kerusi_id' => 'N.31', 'state_id' => '08', 'name' => 'JELAPANG'],
            ['id' => '06632', 'parliament_id' => '06600', 'kerusi_id' => 'N.32', 'state_id' => '08', 'name' => 'MENGLEMBU'],
            ['id' => '06633', 'parliament_id' => '06600', 'kerusi_id' => 'N.33', 'state_id' => '08', 'name' => 'TRONOH'],

            ['id' => '06734', 'parliament_id' => '06700', 'kerusi_id' => 'N.34', 'state_id' => '08', 'name' => 'BUKIT CHANDAN'],
            ['id' => '06735', 'parliament_id' => '06700', 'kerusi_id' => 'N.35', 'state_id' => '08', 'name' => 'MANONG'],

            ['id' => '06836', 'parliament_id' => '06800', 'kerusi_id' => 'N.36', 'state_id' => '08', 'name' => 'PENGKALAN BAHARU'],
            ['id' => '06837', 'parliament_id' => '06800', 'kerusi_id' => 'N.37', 'state_id' => '08', 'name' => 'PANTAI REMIS'],
            ['id' => '06838', 'parliament_id' => '06800', 'kerusi_id' => 'N.38', 'state_id' => '08', 'name' => 'ASTAKA'], //2013: null

            // ['id' => '06938', 'parliament_id' => '06900', 'kerusi_id' => 'N.38', 'state_id' => '08', 'name' => 'BELANJA'], 
            ['id' => '06939', 'parliament_id' => '06900', 'kerusi_id' => 'N.39', 'state_id' => '08', 'name' => 'BELANJA'], 
            // ['id' => '06939', 'parliament_id' => '06900', 'kerusi_id' => 'N.39', 'state_id' => '08', 'name' => 'BOTA'], 
            ['id' => '06940', 'parliament_id' => '06900', 'kerusi_id' => 'N.40', 'state_id' => '08', 'name' => 'BOTA'], 

            // ['id' => '07040', 'parliament_id' => '07000', 'kerusi_id' => 'N.40', 'state_id' => '08', 'name' => 'MALIM NAWAR'], 
            ['id' => '07041', 'parliament_id' => '07000', 'kerusi_id' => 'N.41', 'state_id' => '08', 'name' => 'MALIM NAWAR'], 
            // ['id' => '07041', 'parliament_id' => '07000', 'kerusi_id' => 'N.41', 'state_id' => '08', 'name' => 'KERANJI'], 
            ['id' => '07042', 'parliament_id' => '07000', 'kerusi_id' => 'N.42', 'state_id' => '08', 'name' => 'KERANJI'], 
            // ['id' => '07042', 'parliament_id' => '07000', 'kerusi_id' => 'N.42', 'state_id' => '08', 'name' => 'TUALANG SEKAH'], 
            ['id' => '07043', 'parliament_id' => '07000', 'kerusi_id' => 'N.43', 'state_id' => '08', 'name' => 'TUALANG SEKAH'], 

            // ['id' => '07143', 'parliament_id' => '07100', 'kerusi_id' => 'N.43', 'state_id' => '08', 'name' => 'SUNGAI RAPAT'],
            ['id' => '07144', 'parliament_id' => '07100', 'kerusi_id' => 'N.44', 'state_id' => '08', 'name' => 'SUNGAI RAPAT'],
            // ['id' => '07144', 'parliament_id' => '07100', 'kerusi_id' => 'N.44', 'state_id' => '08', 'name' => 'SIMPANG PULAI'],
            ['id' => '07145', 'parliament_id' => '07100', 'kerusi_id' => 'N.45', 'state_id' => '08', 'name' => 'SIMPANG PULAI'],
            // ['id' => '07145', 'parliament_id' => '07100', 'kerusi_id' => 'N.45', 'state_id' => '08', 'name' => 'TEJA'],
            ['id' => '07146', 'parliament_id' => '07100', 'kerusi_id' => 'N.46', 'state_id' => '08', 'name' => 'TEJA'],

            // ['id' => '07246', 'parliament_id' => '07200', 'kerusi_id' => 'N.46', 'state_id' => '08', 'name' => 'CHENDERIANG'],
            ['id' => '07247', 'parliament_id' => '07200', 'kerusi_id' => 'N.47', 'state_id' => '08', 'name' => 'CHENDERIANG'],
            // ['id' => '07247', 'parliament_id' => '07200', 'kerusi_id' => 'N.47', 'state_id' => '08', 'name' => 'AYER KUNING'],
            ['id' => '07248', 'parliament_id' => '07200', 'kerusi_id' => 'N.48', 'state_id' => '08', 'name' => 'AYER KUNING'],

            // ['id' => '07348', 'parliament_id' => '07300', 'kerusi_id' => 'N.48', 'state_id' => '08', 'name' => 'SUNGAI MANIK'],
            ['id' => '07349', 'parliament_id' => '07300', 'kerusi_id' => 'N.49', 'state_id' => '08', 'name' => 'SUNGAI MANIK'],
            // ['id' => '07349', 'parliament_id' => '07300', 'kerusi_id' => 'N.49', 'state_id' => '08', 'name' => 'KAMPONG GAJAH'],
            ['id' => '07350', 'parliament_id' => '07300', 'kerusi_id' => 'N.50', 'state_id' => '08', 'name' => 'KAMPONG GAJAH'],
            // ['id' => '07350', 'parliament_id' => '07300', 'kerusi_id' => 'N.50', 'state_id' => '08', 'name' => 'SITIAWAN'],

            ['id' => '07451', 'parliament_id' => '07400', 'kerusi_id' => 'N.51', 'state_id' => '08', 'name' => 'PASIR PANJANG'],
            ['id' => '07452', 'parliament_id' => '07400', 'kerusi_id' => 'N.52', 'state_id' => '08', 'name' => 'PANGKOR'],

            ['id' => '07553', 'parliament_id' => '07500', 'kerusi_id' => 'N.53', 'state_id' => '08', 'name' => 'RUNGKUP'],
            ['id' => '07554', 'parliament_id' => '07500', 'kerusi_id' => 'N.54', 'state_id' => '08', 'name' => 'HUTAN MELINTANG'],

            ['id' => '07655', 'parliament_id' => '07600', 'kerusi_id' => 'N.55', 'state_id' => '08', 'name' => 'PASIR BEDAMAR'],
            ['id' => '07656', 'parliament_id' => '07600', 'kerusi_id' => 'N.56', 'state_id' => '08', 'name' => 'CHANGKAT JONG'],

            ['id' => '07757', 'parliament_id' => '07700', 'kerusi_id' => 'N.57', 'state_id' => '08', 'name' => 'SUNGKAI'],
            ['id' => '07758', 'parliament_id' => '07700', 'kerusi_id' => 'N.58', 'state_id' => '08', 'name' => 'SLIM'],
            ['id' => '07759', 'parliament_id' => '07700', 'kerusi_id' => 'N.59', 'state_id' => '08', 'name' => 'BEHRANG'],
            /*
            * pahang
            */
            ['id' => '07801', 'parliament_id' => '07800', 'kerusi_id' => 'N.01', 'state_id' => '06', 'name' => 'TANAH RATA'],
            ['id' => '07802', 'parliament_id' => '07800', 'kerusi_id' => 'N.02', 'state_id' => '06', 'name' => 'JELAI'],

            ['id' => '07903', 'parliament_id' => '07900', 'kerusi_id' => 'N.03', 'state_id' => '06', 'name' => 'PADANG TENGKU'],
            ['id' => '07904', 'parliament_id' => '07900', 'kerusi_id' => 'N.04', 'state_id' => '06', 'name' => 'CHEKA'],
            ['id' => '07905', 'parliament_id' => '07900', 'kerusi_id' => 'N.05', 'state_id' => '06', 'name' => 'BENTA'],

            ['id' => '08006', 'parliament_id' => '08000', 'kerusi_id' => 'N.06', 'state_id' => '06', 'name' => 'BATU TALAM'],
            ['id' => '08007', 'parliament_id' => '08000', 'kerusi_id' => 'N.07', 'state_id' => '06', 'name' => 'TRAS'],
            ['id' => '08008', 'parliament_id' => '08000', 'kerusi_id' => 'N.08', 'state_id' => '06', 'name' => 'DONG'],

            ['id' => '08109', 'parliament_id' => '08100', 'kerusi_id' => 'N.09', 'state_id' => '06', 'name' => 'TAHAN'],
            ['id' => '08110', 'parliament_id' => '08100', 'kerusi_id' => 'N.10', 'state_id' => '06', 'name' => 'DAMAK'],
            ['id' => '08111', 'parliament_id' => '08100', 'kerusi_id' => 'N.11', 'state_id' => '06', 'name' => 'PULAU TAWAR'],

            ['id' => '08212', 'parliament_id' => '08200', 'kerusi_id' => 'N.12', 'state_id' => '06', 'name' => 'BESERAH'],
            ['id' => '08213', 'parliament_id' => '08200', 'kerusi_id' => 'N.13', 'state_id' => '06', 'name' => 'SEMAMBU'],

            ['id' => '08314', 'parliament_id' => '08300', 'kerusi_id' => 'N.14', 'state_id' => '06', 'name' => 'TERUNTUM'],
            ['id' => '08315', 'parliament_id' => '08300', 'kerusi_id' => 'N.15', 'state_id' => '06', 'name' => 'TANJUNG LUMPUR'],
            ['id' => '08316', 'parliament_id' => '08300', 'kerusi_id' => 'N.16', 'state_id' => '06', 'name' => 'INDERAPURA'],

            ['id' => '08417', 'parliament_id' => '08400', 'kerusi_id' => 'N.17', 'state_id' => '06', 'name' => 'SUNGAI LEMBING'],
            ['id' => '08418', 'parliament_id' => '08400', 'kerusi_id' => 'N.18', 'state_id' => '06', 'name' => 'LEPAR'],
            ['id' => '08419', 'parliament_id' => '08400', 'kerusi_id' => 'N.19', 'state_id' => '06', 'name' => 'PANCHING'],

            ['id' => '08520', 'parliament_id' => '08500', 'kerusi_id' => 'N.20', 'state_id' => '06', 'name' => 'PULAU MANIS'],
            ['id' => '08521', 'parliament_id' => '08500', 'kerusi_id' => 'N.21', 'state_id' => '06', 'name' => 'PERAMU JAYA'],
            ['id' => '08522', 'parliament_id' => '08500', 'kerusi_id' => 'N.22', 'state_id' => '06', 'name' => 'BEBAR'],
            ['id' => '08523', 'parliament_id' => '08500', 'kerusi_id' => 'N.23', 'state_id' => '06', 'name' => 'CHINI'],

            ['id' => '08624', 'parliament_id' => '08600', 'kerusi_id' => 'N.24', 'state_id' => '06', 'name' => 'LUIT'],
            ['id' => '08625', 'parliament_id' => '08600', 'kerusi_id' => 'N.25', 'state_id' => '06', 'name' => 'KUALA SENTUL'],
            ['id' => '08626', 'parliament_id' => '08600', 'kerusi_id' => 'N.26', 'state_id' => '06', 'name' => 'CHENOR'],

            ['id' => '08727', 'parliament_id' => '08700', 'kerusi_id' => 'N.27', 'state_id' => '06', 'name' => 'JENDERAK'],
            ['id' => '08728', 'parliament_id' => '08700', 'kerusi_id' => 'N.28', 'state_id' => '06', 'name' => 'KERDAU'],
            ['id' => '08729', 'parliament_id' => '08700', 'kerusi_id' => 'N.29', 'state_id' => '06', 'name' => 'JENGKA'],

            ['id' => '08830', 'parliament_id' => '08800', 'kerusi_id' => 'N.30', 'state_id' => '06', 'name' => 'MENTAKAB'],
            ['id' => '08831', 'parliament_id' => '08800', 'kerusi_id' => 'N.31', 'state_id' => '06', 'name' => 'LANCHANG'],
            ['id' => '08832', 'parliament_id' => '08800', 'kerusi_id' => 'N.32', 'state_id' => '06', 'name' => 'KUALA SEMANTAN'],

            ['id' => '08933', 'parliament_id' => '08900', 'kerusi_id' => 'N.33', 'state_id' => '06', 'name' => 'BILUT'],
            ['id' => '08934', 'parliament_id' => '08900', 'kerusi_id' => 'N.34', 'state_id' => '06', 'name' => 'KETARI'],
            ['id' => '08935', 'parliament_id' => '08900', 'kerusi_id' => 'N.35', 'state_id' => '06', 'name' => 'SABAI'],
            ['id' => '08936', 'parliament_id' => '08900', 'kerusi_id' => 'N.36', 'state_id' => '06', 'name' => 'PELANGAI'],

            ['id' => '09037', 'parliament_id' => '09000', 'kerusi_id' => 'N.37', 'state_id' => '06', 'name' => 'GUAI'],
            ['id' => '09038', 'parliament_id' => '09000', 'kerusi_id' => 'N.38', 'state_id' => '06', 'name' => 'TRIANG'],
            ['id' => '09039', 'parliament_id' => '09000', 'kerusi_id' => 'N.39', 'state_id' => '06', 'name' => 'KEMAYAN'],

            ['id' => '09140', 'parliament_id' => '09100', 'kerusi_id' => 'N.40', 'state_id' => '06', 'name' => 'BUKIT IBAM'],
            ['id' => '09141', 'parliament_id' => '09100', 'kerusi_id' => 'N.41', 'state_id' => '06', 'name' => 'MUADZAM SHAH'],
            ['id' => '09142', 'parliament_id' => '09100', 'kerusi_id' => 'N.42', 'state_id' => '06', 'name' => 'TIOMAN'],
            /*
            * selangor
            */
            ['id' => '09201', 'parliament_id' => '09200', 'kerusi_id' => 'N.01', 'state_id' => '10', 'name' => 'SUNGAI AIR TAWAR'],
            ['id' => '09202', 'parliament_id' => '09200', 'kerusi_id' => 'N.02', 'state_id' => '10', 'name' => 'SABAK'],

            ['id' => '09303', 'parliament_id' => '09300', 'kerusi_id' => 'N.03', 'state_id' => '10', 'name' => 'SUNGAI PANJANG'],
            ['id' => '09304', 'parliament_id' => '09300', 'kerusi_id' => 'N.04', 'state_id' => '10', 'name' => 'SEKINCHAN'],

            ['id' => '09405', 'parliament_id' => '09400', 'kerusi_id' => 'N.05', 'state_id' => '10', 'name' => 'HULU BERNAM'],
            ['id' => '09406', 'parliament_id' => '09400', 'kerusi_id' => 'N.06', 'state_id' => '10', 'name' => 'KUALA KUBU BAHARU'],
            ['id' => '09407', 'parliament_id' => '09400', 'kerusi_id' => 'N.07', 'state_id' => '10', 'name' => 'BATANG KALI'],

            ['id' => '09508', 'parliament_id' => '09500', 'kerusi_id' => 'N.08', 'state_id' => '10', 'name' => 'SUNGAI BURONG'],
            ['id' => '09509', 'parliament_id' => '09500', 'kerusi_id' => 'N.09', 'state_id' => '10', 'name' => 'PERMATANG'],

            ['id' => '09610', 'parliament_id' => '09600', 'kerusi_id' => 'N.10', 'state_id' => '10', 'name' => 'BUKIT MELAWATI'],
            ['id' => '09611', 'parliament_id' => '09600', 'kerusi_id' => 'N.11', 'state_id' => '10', 'name' => 'IJOK'],
            ['id' => '09612', 'parliament_id' => '09600', 'kerusi_id' => 'N.12', 'state_id' => '10', 'name' => 'JERAM'],

            ['id' => '09713', 'parliament_id' => '09700', 'kerusi_id' => 'N.13', 'state_id' => '10', 'name' => 'KUANG'],
            ['id' => '09714', 'parliament_id' => '09700', 'kerusi_id' => 'N.14', 'state_id' => '10', 'name' => 'RAWANG'],
            ['id' => '09715', 'parliament_id' => '09700', 'kerusi_id' => 'N.15', 'state_id' => '10', 'name' => 'TAMAN TEMPLER'],

            ['id' => '09816', 'parliament_id' => '09800', 'kerusi_id' => 'N.16', 'state_id' => '10', 'name' => 'SUNGAI TUA'], //2013: BATU CAVES
            ['id' => '09817', 'parliament_id' => '09800', 'kerusi_id' => 'N.17', 'state_id' => '10', 'name' => 'GOMBAK SETIA'],
            ['id' => '09818', 'parliament_id' => '09800', 'kerusi_id' => 'N.18', 'state_id' => '10', 'name' => 'HULU KELANG'],

            ['id' => '09919', 'parliament_id' => '09900', 'kerusi_id' => 'N.19', 'state_id' => '10', 'name' => 'BUKIT ANTARABANGSA'],
            ['id' => '09920', 'parliament_id' => '09900', 'kerusi_id' => 'N.20', 'state_id' => '10', 'name' => 'LEMBAH JAYA'],

            ['id' => '10021', 'parliament_id' => '10000', 'kerusi_id' => 'N.21', 'state_id' => '10', 'name' => 'PANDAN INDAH'], //2013: CHEMPAKA
            ['id' => '10022', 'parliament_id' => '10000', 'kerusi_id' => 'N.22', 'state_id' => '10', 'name' => 'TERATAI'],

            ['id' => '10123', 'parliament_id' => '10100', 'kerusi_id' => 'N.23', 'state_id' => '10', 'name' => 'DUSUN TUA'],
            ['id' => '10124', 'parliament_id' => '10100', 'kerusi_id' => 'N.24', 'state_id' => '10', 'name' => 'SEMENYIH'],
            // ['id' => '10125', 'parliament_id' => '10100', 'kerusi_id' => 'N.25', 'state_id' => '10', 'name' => 'KAJANG'],

            ['id' => '10125', 'parliament_id' => '10200', 'kerusi_id' => 'N.25', 'state_id' => '10', 'name' => 'KAJANG'], //2013: null
            ['id' => '10226', 'parliament_id' => '10200', 'kerusi_id' => 'N.26', 'state_id' => '10', 'name' => 'SUNGAI RAMAL'], //2013: BANGI
            ['id' => '10227', 'parliament_id' => '10200', 'kerusi_id' => 'N.27', 'state_id' => '10', 'name' => 'BALAKONG'],
            // ['id' => '10228', 'parliament_id' => '10200', 'kerusi_id' => 'N.28', 'state_id' => '10', 'name' => 'SERI KEMBANGAN'],

            ['id' => '10228', 'parliament_id' => '10300', 'kerusi_id' => 'N.28', 'state_id' => '10', 'name' => 'SERI KEMBANGAN'], //2013: null
            ['id' => '10329', 'parliament_id' => '10300', 'kerusi_id' => 'N.29', 'state_id' => '10', 'name' => 'SERI SERDANG'],
            // ['id' => '10330', 'parliament_id' => '10300', 'kerusi_id' => 'N.30', 'state_id' => '10', 'name' => 'KINRARA'],

            ['id' => '10330', 'parliament_id' => '10400', 'kerusi_id' => 'N.30', 'state_id' => '10', 'name' => 'KINRARA'], //2013: null
            ['id' => '10431', 'parliament_id' => '10400', 'kerusi_id' => 'N.31', 'state_id' => '10', 'name' => 'SUBANG JAYA'],
            // ['id' => '10432', 'parliament_id' => '10400', 'kerusi_id' => 'N.32', 'state_id' => '10', 'name' => 'SERI SETIA'],

            ['id' => '10432', 'parliament_id' => '10500', 'kerusi_id' => 'N.32', 'state_id' => '10', 'name' => 'SERI SETIA'], //2013: null
            ['id' => '10533', 'parliament_id' => '10500', 'kerusi_id' => 'N.33', 'state_id' => '10', 'name' => 'TAMAN MEDAN'],
            ['id' => '10534', 'parliament_id' => '10500', 'kerusi_id' => 'N.34', 'state_id' => '10', 'name' => 'BUKIT GASING'],

            ['id' => '10635', 'parliament_id' => '10600', 'kerusi_id' => 'N.35', 'state_id' => '10', 'name' => 'KAMPUNG TUNKU'],
            ['id' => '10636', 'parliament_id' => '10600', 'kerusi_id' => 'N.36', 'state_id' => '10', 'name' => 'DAMANSARA UTAMA'],
            ['id' => '10737', 'parliament_id' => '10600', 'kerusi_id' => 'N.37', 'state_id' => '10', 'name' => 'BUKIT LANJAN'], //2013: null

            // ['id' => '10737', 'parliament_id' => '10700', 'kerusi_id' => 'N.37', 'state_id' => '10', 'name' => 'BUKIT LANJAN'],
            ['id' => '10738', 'parliament_id' => '10700', 'kerusi_id' => 'N.38', 'state_id' => '10', 'name' => 'PAYA JARAS'],
            ['id' => '10739', 'parliament_id' => '10700', 'kerusi_id' => 'N.39', 'state_id' => '10', 'name' => 'KOTA DAMANSARA'],

            ['id' => '10840', 'parliament_id' => '10800', 'kerusi_id' => 'N.40', 'state_id' => '10', 'name' => 'KOTA ANGGERIK'],
            ['id' => '10841', 'parliament_id' => '10800', 'kerusi_id' => 'N.41', 'state_id' => '10', 'name' => 'BATU TIGA'],

            ['id' => '10942', 'parliament_id' => '10900', 'kerusi_id' => 'N.42', 'state_id' => '10', 'name' => 'MERU'],
            ['id' => '10943', 'parliament_id' => '10900', 'kerusi_id' => 'N.43', 'state_id' => '10', 'name' => 'SEMENTA'],
            // ['id' => '10944', 'parliament_id' => '10900', 'kerusi_id' => 'N.44', 'state_id' => '10', 'name' => 'SUNGAI PINANG'],
            ['id' => '10944', 'parliament_id' => '10900', 'kerusi_id' => 'N.44', 'state_id' => '10', 'name' => 'SELAT KLANG'],
            // ['id' => '10945', 'parliament_id' => '10900', 'kerusi_id' => 'N.45', 'state_id' => '10', 'name' => 'SELAT KLANG'],
            ['id' => '10945', 'parliament_id' => '10900', 'kerusi_id' => 'N.45', 'state_id' => '10', 'name' => 'BANDAR BARU KLANG'],

            ['id' => '11046', 'parliament_id' => '11000', 'kerusi_id' => 'N.46', 'state_id' => '10', 'name' => 'PELABUHAN KLANG'],
            ['id' => '11047', 'parliament_id' => '11000', 'kerusi_id' => 'N.47', 'state_id' => '10', 'name' => 'PANDAMARAN'],
            ['id' => '11048', 'parliament_id' => '11000', 'kerusi_id' => 'N.48', 'state_id' => '10', 'name' => 'SENTOSA'], //2013: KOTA ALAM SHAH

            ['id' => '11149', 'parliament_id' => '11100', 'kerusi_id' => 'N.49', 'state_id' => '10', 'name' => 'SUNGAI KANDIS'], //2013: SERI ANDALAS
            ['id' => '11150', 'parliament_id' => '11100', 'kerusi_id' => 'N.50', 'state_id' => '10', 'name' => 'KOTA KEMUNING'], //2013: SRI MUDA

            ['id' => '11251', 'parliament_id' => '11200', 'kerusi_id' => 'N.51', 'state_id' => '10', 'name' => 'SIJANGKANG'],
            ['id' => '11252', 'parliament_id' => '11200', 'kerusi_id' => 'N.52', 'state_id' => '10', 'name' => 'TELUK DATUK'],
            ['id' => '11253', 'parliament_id' => '11200', 'kerusi_id' => 'N.53', 'state_id' => '10', 'name' => 'MORIB'],

            ['id' => '11354', 'parliament_id' => '11300', 'kerusi_id' => 'N.54', 'state_id' => '10', 'name' => 'TANJONG SEPAT'],
            ['id' => '11355', 'parliament_id' => '11300', 'kerusi_id' => 'N.55', 'state_id' => '10', 'name' => 'DENGKIL'],
            ['id' => '11356', 'parliament_id' => '11300', 'kerusi_id' => 'N.56', 'state_id' => '10', 'name' => 'SUNGAI PELEK'],
            /*
            * negeri sembilan
            */
            ['id' => '12601', 'parliament_id' => '12600', 'kerusi_id' => 'N.01', 'state_id' => '05', 'name' => 'CHENNAH'],
            ['id' => '12602', 'parliament_id' => '12600', 'kerusi_id' => 'N.02', 'state_id' => '05', 'name' => 'PERTANG'],
            ['id' => '12603', 'parliament_id' => '12600', 'kerusi_id' => 'N.03', 'state_id' => '05', 'name' => 'SUNGAI LUI'],
            ['id' => '12604', 'parliament_id' => '12600', 'kerusi_id' => 'N.04', 'state_id' => '05', 'name' => 'KLAWANG'],

            ['id' => '12705', 'parliament_id' => '12700', 'kerusi_id' => 'N.05', 'state_id' => '05', 'name' => 'SERTING'],
            ['id' => '12706', 'parliament_id' => '12700', 'kerusi_id' => 'N.06', 'state_id' => '05', 'name' => 'PALONG'],
            ['id' => '12707', 'parliament_id' => '12700', 'kerusi_id' => 'N.07', 'state_id' => '05', 'name' => 'JERAM PADANG'],
            ['id' => '12708', 'parliament_id' => '12700', 'kerusi_id' => 'N.08', 'state_id' => '05', 'name' => 'BAHAU'],

            ['id' => '12809', 'parliament_id' => '12800', 'kerusi_id' => 'N.09', 'state_id' => '05', 'name' => 'LENGGENG'],
            ['id' => '12810', 'parliament_id' => '12800', 'kerusi_id' => 'N.10', 'state_id' => '05', 'name' => 'NILAI'],
            ['id' => '12811', 'parliament_id' => '12800', 'kerusi_id' => 'N.11', 'state_id' => '05', 'name' => 'LOBAK'],
            ['id' => '12812', 'parliament_id' => '12800', 'kerusi_id' => 'N.12', 'state_id' => '05', 'name' => 'TEMIANG'],
            ['id' => '12813', 'parliament_id' => '12800', 'kerusi_id' => 'N.13', 'state_id' => '05', 'name' => 'SIKAMAT'],
            ['id' => '12814', 'parliament_id' => '12800', 'kerusi_id' => 'N.14', 'state_id' => '05', 'name' => 'AMPANGAN'],

            ['id' => '12915', 'parliament_id' => '12900', 'kerusi_id' => 'N.15', 'state_id' => '05', 'name' => 'JUASSEH'],
            ['id' => '12916', 'parliament_id' => '12900', 'kerusi_id' => 'N.16', 'state_id' => '05', 'name' => 'SERI MENANTI'],
            ['id' => '12917', 'parliament_id' => '12900', 'kerusi_id' => 'N.17', 'state_id' => '05', 'name' => 'SENALING'],
            ['id' => '12918', 'parliament_id' => '12900', 'kerusi_id' => 'N.18', 'state_id' => '05', 'name' => 'PILAH'],
            ['id' => '12919', 'parliament_id' => '12900', 'kerusi_id' => 'N.19', 'state_id' => '05', 'name' => 'JOHOL'],

            ['id' => '13020', 'parliament_id' => '13000', 'kerusi_id' => 'N.20', 'state_id' => '05', 'name' => 'LABU'],
            ['id' => '13021', 'parliament_id' => '13000', 'kerusi_id' => 'N.21', 'state_id' => '05', 'name' => 'BUKIT KEPAYANG'],
            ['id' => '13022', 'parliament_id' => '13000', 'kerusi_id' => 'N.22', 'state_id' => '05', 'name' => 'RAHANG'],
            ['id' => '13023', 'parliament_id' => '13000', 'kerusi_id' => 'N.23', 'state_id' => '05', 'name' => 'MAMBAU'],
            ['id' => '13024', 'parliament_id' => '13000', 'kerusi_id' => 'N.24', 'state_id' => '05', 'name' => 'SEREMBAN JAYA'], //2013: SENAWANG

            ['id' => '13125', 'parliament_id' => '13100', 'kerusi_id' => 'N.25', 'state_id' => '05', 'name' => 'PAROI'],
            ['id' => '13126', 'parliament_id' => '13100', 'kerusi_id' => 'N.26', 'state_id' => '05', 'name' => 'CHEMBONG'],
            ['id' => '13127', 'parliament_id' => '13100', 'kerusi_id' => 'N.27', 'state_id' => '05', 'name' => 'RANTAU'],
            ['id' => '13128', 'parliament_id' => '13100', 'kerusi_id' => 'N.28', 'state_id' => '05', 'name' => 'KOTA'],

            ['id' => '13229', 'parliament_id' => '13200', 'kerusi_id' => 'N.29', 'state_id' => '05', 'name' => 'CHUAH'],
            ['id' => '13230', 'parliament_id' => '13200', 'kerusi_id' => 'N.30', 'state_id' => '05', 'name' => 'LUKUT'],
            ['id' => '13231', 'parliament_id' => '13200', 'kerusi_id' => 'N.31', 'state_id' => '05', 'name' => 'BAGAN PINANG'],
            ['id' => '13232', 'parliament_id' => '13200', 'kerusi_id' => 'N.32', 'state_id' => '05', 'name' => 'LINGGI'],
            ['id' => '13233', 'parliament_id' => '13200', 'kerusi_id' => 'N.33', 'state_id' => '05', 'name' => 'SRI TANJUNG'], //2013: PORT DICKSON

            ['id' => '13334', 'parliament_id' => '13300', 'kerusi_id' => 'N.34', 'state_id' => '05', 'name' => 'GEMAS'],
            ['id' => '13335', 'parliament_id' => '13300', 'kerusi_id' => 'N.35', 'state_id' => '05', 'name' => 'GEMENCHEH'],
            ['id' => '13336', 'parliament_id' => '13300', 'kerusi_id' => 'N.36', 'state_id' => '05', 'name' => 'REPAH'],
            /*
            * melaka
            */
            ['id' => '13401', 'parliament_id' => '13400', 'kerusi_id' => 'N.01', 'state_id' => '04', 'name' => 'KUALA LINGGI'],
            ['id' => '13402', 'parliament_id' => '13400', 'kerusi_id' => 'N.02', 'state_id' => '04', 'name' => 'TANJUNG BIDARA'],
            ['id' => '13403', 'parliament_id' => '13400', 'kerusi_id' => 'N.03', 'state_id' => '04', 'name' => 'AYER LIMAU'],
            ['id' => '13404', 'parliament_id' => '13400', 'kerusi_id' => 'N.04', 'state_id' => '04', 'name' => 'LENDU'],
            ['id' => '13405', 'parliament_id' => '13400', 'kerusi_id' => 'N.05', 'state_id' => '04', 'name' => 'TABOH NANING'],

            ['id' => '13506', 'parliament_id' => '13500', 'kerusi_id' => 'N.06', 'state_id' => '04', 'name' => 'REMBIA'],
            ['id' => '13507', 'parliament_id' => '13500', 'kerusi_id' => 'N.07', 'state_id' => '04', 'name' => 'GADEK'],
            ['id' => '13508', 'parliament_id' => '13500', 'kerusi_id' => 'N.08', 'state_id' => '04', 'name' => 'MACHAP JAYA'], //2013: MACHAP
            ['id' => '13509', 'parliament_id' => '13500', 'kerusi_id' => 'N.09', 'state_id' => '04', 'name' => 'DURIAN TUNGGAL'],
            ['id' => '13510', 'parliament_id' => '13500', 'kerusi_id' => 'N.10', 'state_id' => '04', 'name' => 'ASAHAN'],

            ['id' => '13611', 'parliament_id' => '13600', 'kerusi_id' => 'N.11', 'state_id' => '04', 'name' => 'SUNGAI UDANG'],
            ['id' => '13612', 'parliament_id' => '13600', 'kerusi_id' => 'N.12', 'state_id' => '04', 'name' => 'PANTAI KUNDOR'],
            ['id' => '13613', 'parliament_id' => '13600', 'kerusi_id' => 'N.13', 'state_id' => '04', 'name' => 'PAYA RUMPUT'],
            ['id' => '13614', 'parliament_id' => '13600', 'kerusi_id' => 'N.14', 'state_id' => '04', 'name' => 'KELEBANG'],

            ['id' => '13715', 'parliament_id' => '13700', 'kerusi_id' => 'N.15', 'state_id' => '04', 'name' => 'PENGKALAN BATU'], //2013: BACHANG
            ['id' => '13716', 'parliament_id' => '13700', 'kerusi_id' => 'N.16', 'state_id' => '04', 'name' => 'AYER KEROH'],
            ['id' => '13717', 'parliament_id' => '13700', 'kerusi_id' => 'N.17', 'state_id' => '04', 'name' => 'BUKIT KATIL'], //2013: BUKIT BARU
            ['id' => '13718', 'parliament_id' => '13700', 'kerusi_id' => 'N.18', 'state_id' => '04', 'name' => 'AYER MOLEK'],

            ['id' => '13819', 'parliament_id' => '13800', 'kerusi_id' => 'N.19', 'state_id' => '04', 'name' => 'KESIDANG'],
            ['id' => '13820', 'parliament_id' => '13800', 'kerusi_id' => 'N.20', 'state_id' => '04', 'name' => 'KOTA LAKSAMANA'],
            ['id' => '13821', 'parliament_id' => '13800', 'kerusi_id' => 'N.21', 'state_id' => '04', 'name' => 'DUYONG'],
            ['id' => '13822', 'parliament_id' => '13800', 'kerusi_id' => 'N.22', 'state_id' => '04', 'name' => 'BANDAR HILIR'],
            ['id' => '13823', 'parliament_id' => '13800', 'kerusi_id' => 'N.23', 'state_id' => '04', 'name' => 'TELOK MAS'],

            ['id' => '13924', 'parliament_id' => '13900', 'kerusi_id' => 'N.24', 'state_id' => '04', 'name' => 'BEMBAN'],
            ['id' => '13925', 'parliament_id' => '13900', 'kerusi_id' => 'N.25', 'state_id' => '04', 'name' => 'RIM'],
            ['id' => '13926', 'parliament_id' => '13900', 'kerusi_id' => 'N.26', 'state_id' => '04', 'name' => 'SERKAM'],
            ['id' => '13927', 'parliament_id' => '13900', 'kerusi_id' => 'N.27', 'state_id' => '04', 'name' => 'MERLIMAU'],
            ['id' => '13928', 'parliament_id' => '13900', 'kerusi_id' => 'N.28', 'state_id' => '04', 'name' => 'SUNGAI RAMBAI'],
            /*
            * johor
            */
            ['id' => '14001', 'parliament_id' => '14000', 'kerusi_id' => 'N.01', 'state_id' => '01', 'name' => 'BULOH KASAP'],
            ['id' => '14002', 'parliament_id' => '14000', 'kerusi_id' => 'N.02', 'state_id' => '01', 'name' => 'JEMENTAH'],

            ['id' => '14103', 'parliament_id' => '14100', 'kerusi_id' => 'N.03', 'state_id' => '01', 'name' => 'PEMANIS'],
            ['id' => '14104', 'parliament_id' => '14100', 'kerusi_id' => 'N.04', 'state_id' => '01', 'name' => 'KEMELAH'],

            ['id' => '14205', 'parliament_id' => '14200', 'kerusi_id' => 'N.05', 'state_id' => '01', 'name' => 'TENANG'],
            ['id' => '14206', 'parliament_id' => '14200', 'kerusi_id' => 'N.06', 'state_id' => '01', 'name' => 'BEKOK'],

            ['id' => '14307', 'parliament_id' => '14300', 'kerusi_id' => 'N.07', 'state_id' => '01', 'name' => 'BUKIT KEPONG'], //2013: BUKIT SERAMPANG
            ['id' => '14308', 'parliament_id' => '14300', 'kerusi_id' => 'N.08', 'state_id' => '01', 'name' => 'BUKIT PASIR'], //2013: JORAK

            ['id' => '14409', 'parliament_id' => '14400', 'kerusi_id' => 'N.09', 'state_id' => '01', 'name' => 'GAMBIR'],
            ['id' => '14410', 'parliament_id' => '14400', 'kerusi_id' => 'N.10', 'state_id' => '01', 'name' => 'TANGKAK'],
            ['id' => '14411', 'parliament_id' => '14400', 'kerusi_id' => 'N.11', 'state_id' => '01', 'name' => 'SEROM'],

            ['id' => '14512', 'parliament_id' => '14500', 'kerusi_id' => 'N.12', 'state_id' => '01', 'name' => 'BENTAYAN'],
            ['id' => '14513', 'parliament_id' => '14500', 'kerusi_id' => 'N.13', 'state_id' => '01', 'name' => 'SIMPANG JERAM'], //2013: SUNGAI ABONG
            ['id' => '14514', 'parliament_id' => '14500', 'kerusi_id' => 'N.14', 'state_id' => '01', 'name' => 'BUKIT NANING'],

            ['id' => '14615', 'parliament_id' => '14600', 'kerusi_id' => 'N.15', 'state_id' => '01', 'name' => 'MAHARANI'],
            ['id' => '14616', 'parliament_id' => '14600', 'kerusi_id' => 'N.16', 'state_id' => '01', 'name' => 'SUNGAI BALANG'],

            ['id' => '14717', 'parliament_id' => '14700', 'kerusi_id' => 'N.17', 'state_id' => '01', 'name' => 'SEMERAH'],
            ['id' => '14718', 'parliament_id' => '14700', 'kerusi_id' => 'N.18', 'state_id' => '01', 'name' => 'SRI MEDAN'],

            ['id' => '14819', 'parliament_id' => '14800', 'kerusi_id' => 'N.19', 'state_id' => '01', 'name' => 'YONG PENG'],
            ['id' => '14820', 'parliament_id' => '14800', 'kerusi_id' => 'N.20', 'state_id' => '01', 'name' => 'SEMARANG'],

            ['id' => '14921', 'parliament_id' => '14900', 'kerusi_id' => 'N.21', 'state_id' => '01', 'name' => 'PARIT YAANI'],
            ['id' => '14922', 'parliament_id' => '14900', 'kerusi_id' => 'N.22', 'state_id' => '01', 'name' => 'PARIT RAJA'],

            ['id' => '15023', 'parliament_id' => '15000', 'kerusi_id' => 'N.23', 'state_id' => '01', 'name' => 'PENGGARAM'],
            ['id' => '15024', 'parliament_id' => '15000', 'kerusi_id' => 'N.24', 'state_id' => '01', 'name' => 'SENGGARANG'],
            ['id' => '15025', 'parliament_id' => '15000', 'kerusi_id' => 'N.25', 'state_id' => '01', 'name' => 'RENGIT'],

            ['id' => '15126', 'parliament_id' => '15100', 'kerusi_id' => 'N.26', 'state_id' => '01', 'name' => 'MACHAP'],
            ['id' => '15127', 'parliament_id' => '15100', 'kerusi_id' => 'N.27', 'state_id' => '01', 'name' => 'LAYANG-LAYANG'],

            ['id' => '15228', 'parliament_id' => '15200', 'kerusi_id' => 'N.28', 'state_id' => '01', 'name' => 'MENGKIBOL'],
            ['id' => '15229', 'parliament_id' => '15200', 'kerusi_id' => 'N.29', 'state_id' => '01', 'name' => 'MAHKOTA'],

            ['id' => '15330', 'parliament_id' => '15300', 'kerusi_id' => 'N.30', 'state_id' => '01', 'name' => 'PALOH'],
            ['id' => '15331', 'parliament_id' => '15300', 'kerusi_id' => 'N.31', 'state_id' => '01', 'name' => 'KAHANG'],

            ['id' => '15432', 'parliament_id' => '15400', 'kerusi_id' => 'N.32', 'state_id' => '01', 'name' => 'ENDAU'],
            ['id' => '15433', 'parliament_id' => '15400', 'kerusi_id' => 'N.33', 'state_id' => '01', 'name' => 'TENGGAROH'],

            ['id' => '15534', 'parliament_id' => '15500', 'kerusi_id' => 'N.34', 'state_id' => '01', 'name' => 'PANTI'],
            ['id' => '15535', 'parliament_id' => '15500', 'kerusi_id' => 'N.35', 'state_id' => '01', 'name' => 'PASIR RAJA'],

            ['id' => '15636', 'parliament_id' => '15600', 'kerusi_id' => 'N.36', 'state_id' => '01', 'name' => 'SEDILI'],
            ['id' => '15637', 'parliament_id' => '15600', 'kerusi_id' => 'N.37', 'state_id' => '01', 'name' => 'JOHOR LAMA'],

            ['id' => '15738', 'parliament_id' => '15700', 'kerusi_id' => 'N.38', 'state_id' => '01', 'name' => 'PENAWAR'],
            ['id' => '15739', 'parliament_id' => '15700', 'kerusi_id' => 'N.39', 'state_id' => '01', 'name' => 'TANJONG SURAT'],

            ['id' => '15840', 'parliament_id' => '15800', 'kerusi_id' => 'N.40', 'state_id' => '01', 'name' => 'TIRAM'],
            ['id' => '15841', 'parliament_id' => '15800', 'kerusi_id' => 'N.41', 'state_id' => '01', 'name' => 'PUTERI WANGSA'],

            ['id' => '15942', 'parliament_id' => '15900', 'kerusi_id' => 'N.42', 'state_id' => '01', 'name' => 'JOHOR JAYA'],
            ['id' => '15943', 'parliament_id' => '15900', 'kerusi_id' => 'N.43', 'state_id' => '01', 'name' => 'PERMAS'],

            ['id' => '16044', 'parliament_id' => '16000', 'kerusi_id' => 'N.44', 'state_id' => '01', 'name' => 'LARKIN'], //2013: TANJONG PUTERI
            ['id' => '16045', 'parliament_id' => '16000', 'kerusi_id' => 'N.45', 'state_id' => '01', 'name' => 'STULANG'],

            ['id' => '16146', 'parliament_id' => '16100', 'kerusi_id' => 'N.46', 'state_id' => '01', 'name' => 'PERLING'], //2013: PENGKALAN RINTING
            ['id' => '16147', 'parliament_id' => '16100', 'kerusi_id' => 'N.47', 'state_id' => '01', 'name' => 'KEMPAS'],

            ['id' => '16248', 'parliament_id' => '16200', 'kerusi_id' => 'N.48', 'state_id' => '01', 'name' => 'SKUDAI'],
            ['id' => '16249', 'parliament_id' => '16200', 'kerusi_id' => 'N.49', 'state_id' => '01', 'name' => 'KOTA ISKANDAR'], //2013: NUSA JAYA

            ['id' => '16350', 'parliament_id' => '16300', 'kerusi_id' => 'N.50', 'state_id' => '01', 'name' => 'BUKIT PERMAI'],
            ['id' => '16351', 'parliament_id' => '16300', 'kerusi_id' => 'N.51', 'state_id' => '01', 'name' => 'BUKIT BATU'],
            ['id' => '16352', 'parliament_id' => '16300', 'kerusi_id' => 'N.52', 'state_id' => '01', 'name' => 'SENAI'],

            ['id' => '16453', 'parliament_id' => '16400', 'kerusi_id' => 'N.53', 'state_id' => '01', 'name' => 'BENUT'],
            ['id' => '16454', 'parliament_id' => '16400', 'kerusi_id' => 'N.54', 'state_id' => '01', 'name' => 'PULAI SEBATANG'],

            ['id' => '16555', 'parliament_id' => '16500', 'kerusi_id' => 'N.55', 'state_id' => '01', 'name' => 'PEKAN NENAS'],
            ['id' => '16556', 'parliament_id' => '16500', 'kerusi_id' => 'N.56', 'state_id' => '01', 'name' => 'KUKUP'],
            /*
            * sabah
            */
            ['id' => '16701', 'parliament_id' => '16700', 'kerusi_id' => 'N.01', 'state_id' => '12', 'name' => 'BANGGI'],
            ['id' => '16702', 'parliament_id' => '16700', 'kerusi_id' => 'N.02', 'state_id' => '12', 'name' => 'TANJONG KAPOR'],
            ['id' => '16703', 'parliament_id' => '16700', 'kerusi_id' => 'N.03', 'state_id' => '12', 'name' => 'PITAS'],

            ['id' => '16804', 'parliament_id' => '16800', 'kerusi_id' => 'N.04', 'state_id' => '12', 'name' => 'MATUNGGONG'],
            ['id' => '16805', 'parliament_id' => '16800', 'kerusi_id' => 'N.05', 'state_id' => '12', 'name' => 'TANDEK'],

            ['id' => '16906', 'parliament_id' => '16900', 'kerusi_id' => 'N.06', 'state_id' => '12', 'name' => 'TEMPASUK'],
            ['id' => '16907', 'parliament_id' => '16900', 'kerusi_id' => 'N.07', 'state_id' => '12', 'name' => 'KADAMAIAN'],
            ['id' => '16908', 'parliament_id' => '16900', 'kerusi_id' => 'N.08', 'state_id' => '12', 'name' => 'USUKAN'],

            ['id' => '17009', 'parliament_id' => '17000', 'kerusi_id' => 'N.09', 'state_id' => '12', 'name' => 'TAMPARULI'],
            ['id' => '17010', 'parliament_id' => '17000', 'kerusi_id' => 'N.10', 'state_id' => '12', 'name' => 'SULAMAN'],
            ['id' => '17011', 'parliament_id' => '17000', 'kerusi_id' => 'N.11', 'state_id' => '12', 'name' => 'KIULU'],

            ['id' => '17112', 'parliament_id' => '17100', 'kerusi_id' => 'N.12', 'state_id' => '12', 'name' => 'KARAMBUNAI'],
            ['id' => '17113', 'parliament_id' => '17100', 'kerusi_id' => 'N.13', 'state_id' => '12', 'name' => 'INANAM'],

            ['id' => '17214', 'parliament_id' => '17200', 'kerusi_id' => 'N.14', 'state_id' => '12', 'name' => 'LIKAS'],
            ['id' => '17215', 'parliament_id' => '17200', 'kerusi_id' => 'N.15', 'state_id' => '12', 'name' => 'API-API'],
            ['id' => '17216', 'parliament_id' => '17200', 'kerusi_id' => 'N.16', 'state_id' => '12', 'name' => 'LUYANG'],

            ['id' => '17317', 'parliament_id' => '17300', 'kerusi_id' => 'N.17', 'state_id' => '12', 'name' => 'TANJONG ARU'],
            ['id' => '17318', 'parliament_id' => '17300', 'kerusi_id' => 'N.18', 'state_id' => '12', 'name' => 'PETAGAS'],

            ['id' => '17419', 'parliament_id' => '17400', 'kerusi_id' => 'N.19', 'state_id' => '12', 'name' => 'KAPAYAN'],
            ['id' => '17420', 'parliament_id' => '17400', 'kerusi_id' => 'N.20', 'state_id' => '12', 'name' => 'MOYOG'],

            ['id' => '17521', 'parliament_id' => '17500', 'kerusi_id' => 'N.21', 'state_id' => '12', 'name' => 'KAWANG'],
            ['id' => '17522', 'parliament_id' => '17500', 'kerusi_id' => 'N.22', 'state_id' => '12', 'name' => 'PANTAI MANIS'],

            ['id' => '17623', 'parliament_id' => '17600', 'kerusi_id' => 'N.23', 'state_id' => '12', 'name' => 'BONGAWAN'],
            ['id' => '17624', 'parliament_id' => '17600', 'kerusi_id' => 'N.24', 'state_id' => '12', 'name' => 'MEMBAKUT'],

            ['id' => '17725', 'parliament_id' => '17700', 'kerusi_id' => 'N.25', 'state_id' => '12', 'name' => 'KLIAS'],
            ['id' => '17726', 'parliament_id' => '17700', 'kerusi_id' => 'N.26', 'state_id' => '12', 'name' => 'KUALA PENYU'],

            ['id' => '17827', 'parliament_id' => '17800', 'kerusi_id' => 'N.27', 'state_id' => '12', 'name' => 'LUMADAN'],
            ['id' => '17828', 'parliament_id' => '17800', 'kerusi_id' => 'N.28', 'state_id' => '12', 'name' => 'SINDUMIN']
            ,
            ['id' => '17929', 'parliament_id' => '17900', 'kerusi_id' => 'N.29', 'state_id' => '12', 'name' => 'KUNDASANG'],
            ['id' => '17930', 'parliament_id' => '17900', 'kerusi_id' => 'N.30', 'state_id' => '12', 'name' => 'KARANAAN'],
            ['id' => '17931', 'parliament_id' => '17900', 'kerusi_id' => 'N.31', 'state_id' => '12', 'name' => 'PAGINATAN'],

            ['id' => '18032', 'parliament_id' => '18000', 'kerusi_id' => 'N.32', 'state_id' => '12', 'name' => 'TAMBUNAN'],
            ['id' => '18033', 'parliament_id' => '18000', 'kerusi_id' => 'N.33', 'state_id' => '12', 'name' => 'BINGKOR'],
            ['id' => '18034', 'parliament_id' => '18000', 'kerusi_id' => 'N.34', 'state_id' => '12', 'name' => 'LIAWAN'],

            ['id' => '18135', 'parliament_id' => '18100', 'kerusi_id' => 'N.35', 'state_id' => '12', 'name' => 'MELALAP'],
            ['id' => '18136', 'parliament_id' => '18100', 'kerusi_id' => 'N.36', 'state_id' => '12', 'name' => 'KEMABONG'],

            ['id' => '18237', 'parliament_id' => '18200', 'kerusi_id' => 'N.37', 'state_id' => '12', 'name' => 'SOOK'],
            ['id' => '18238', 'parliament_id' => '18200', 'kerusi_id' => 'N.38', 'state_id' => '12', 'name' => 'NABAWAN'],

            ['id' => '18339', 'parliament_id' => '18300', 'kerusi_id' => 'N.39', 'state_id' => '12', 'name' => 'SUGUT'],
            ['id' => '18340', 'parliament_id' => '18300', 'kerusi_id' => 'N.40', 'state_id' => '12', 'name' => 'LABUK'],

            ['id' => '18441', 'parliament_id' => '18400', 'kerusi_id' => 'N.41', 'state_id' => '12', 'name' => 'GUM-GUM'],
            ['id' => '18442', 'parliament_id' => '18400', 'kerusi_id' => 'N.42', 'state_id' => '12', 'name' => 'SUNGAI SIBUGA'],

            ['id' => '18543', 'parliament_id' => '18500', 'kerusi_id' => 'N.43', 'state_id' => '12', 'name' => 'SEKONG'],
            ['id' => '18544', 'parliament_id' => '18500', 'kerusi_id' => 'N.44', 'state_id' => '12', 'name' => 'KARAMUNTING'],

            ['id' => '18645', 'parliament_id' => '18600', 'kerusi_id' => 'N.45', 'state_id' => '12', 'name' => 'ELOPURA'],
            ['id' => '18646', 'parliament_id' => '18600', 'kerusi_id' => 'N.46', 'state_id' => '12', 'name' => 'TANJONG PAPAT'],

            ['id' => '18747', 'parliament_id' => '18700', 'kerusi_id' => 'N.47', 'state_id' => '12', 'name' => 'KUAMUT'],
            ['id' => '18748', 'parliament_id' => '18700', 'kerusi_id' => 'N.48', 'state_id' => '12', 'name' => 'SUKAU'],

            ['id' => '18849', 'parliament_id' => '18800', 'kerusi_id' => 'N.49', 'state_id' => '12', 'name' => 'TUNGKU'],
            ['id' => '18850', 'parliament_id' => '18800', 'kerusi_id' => 'N.50', 'state_id' => '12', 'name' => 'LAHAD DATU'],
            ['id' => '18851', 'parliament_id' => '18800', 'kerusi_id' => 'N.51', 'state_id' => '12', 'name' => 'KUNAK'],

            ['id' => '18952', 'parliament_id' => '18900', 'kerusi_id' => 'N.52', 'state_id' => '12', 'name' => 'SULABAYAN'],
            ['id' => '18953', 'parliament_id' => '18900', 'kerusi_id' => 'N.53', 'state_id' => '12', 'name' => 'SENALLANG'],
            ['id' => '18954', 'parliament_id' => '18900', 'kerusi_id' => 'N.54', 'state_id' => '12', 'name' => 'BUGAYA'],

            ['id' => '19055', 'parliament_id' => '19000', 'kerusi_id' => 'N.55', 'state_id' => '12', 'name' => 'BALUNG'],
            ['id' => '19056', 'parliament_id' => '19000', 'kerusi_id' => 'N.56', 'state_id' => '12', 'name' => 'APAS'],
            ['id' => '19057', 'parliament_id' => '19000', 'kerusi_id' => 'N.57', 'state_id' => '12', 'name' => 'SRI TANJONG'],

            ['id' => '19158', 'parliament_id' => '19100', 'kerusi_id' => 'N.58', 'state_id' => '12', 'name' => 'MEROTAI'],
            ['id' => '19159', 'parliament_id' => '19100', 'kerusi_id' => 'N.59', 'state_id' => '12', 'name' => 'TANJONG BATU'],
            ['id' => '19160', 'parliament_id' => '19100', 'kerusi_id' => 'N.60', 'state_id' => '12', 'name' => 'SEBATIK'],
            /*
            * sarawak
            */
            ['id' => '19201', 'parliament_id' => '19200', 'kerusi_id' => 'N.01', 'state_id' => '13', 'name' => 'OPAR'],
            ['id' => '19202', 'parliament_id' => '19200', 'kerusi_id' => 'N.02', 'state_id' => '13', 'name' => 'TASIK BIRU'],

            ['id' => '19303', 'parliament_id' => '19300', 'kerusi_id' => 'N.03', 'state_id' => '13', 'name' => 'TANJUNG DATU'],
            ['id' => '19304', 'parliament_id' => '19300', 'kerusi_id' => 'N.04', 'state_id' => '13', 'name' => 'PANTAI DAMAI'],
            ['id' => '19305', 'parliament_id' => '19300', 'kerusi_id' => 'N.05', 'state_id' => '13', 'name' => 'DEMAK LAUT'],

            ['id' => '19406', 'parliament_id' => '19400', 'kerusi_id' => 'N.06', 'state_id' => '13', 'name' => 'TUPONG'],
            ['id' => '19407', 'parliament_id' => '19400', 'kerusi_id' => 'N.07', 'state_id' => '13', 'name' => 'SAMARIANG'],
            ['id' => '19408', 'parliament_id' => '19400', 'kerusi_id' => 'N.08', 'state_id' => '13', 'name' => 'SATOK'],

            ['id' => '19509', 'parliament_id' => '19500', 'kerusi_id' => 'N.09', 'state_id' => '13', 'name' => 'PADUNGAN'],
            ['id' => '19510', 'parliament_id' => '19500', 'kerusi_id' => 'N.10', 'state_id' => '13', 'name' => 'PENDING'],

            ['id' => '19611', 'parliament_id' => '19600', 'kerusi_id' => 'N.11', 'state_id' => '13', 'name' => 'BATU LINTANG'],
            ['id' => '19612', 'parliament_id' => '19600', 'kerusi_id' => 'N.12', 'state_id' => '13', 'name' => 'KOTA SENTOSA'],
            ['id' => '19613', 'parliament_id' => '19600', 'kerusi_id' => 'N.13', 'state_id' => '13', 'name' => 'BATU KAWA'],

            ['id' => '19714', 'parliament_id' => '19700', 'kerusi_id' => 'N.14', 'state_id' => '13', 'name' => 'ASAJAYA'],
            ['id' => '19715', 'parliament_id' => '19700', 'kerusi_id' => 'N.15', 'state_id' => '13', 'name' => 'MUARA TUANG'],

            ['id' => '19816', 'parliament_id' => '19800', 'kerusi_id' => 'N.16', 'state_id' => '13', 'name' => 'BENGOH'],
            ['id' => '19817', 'parliament_id' => '19800', 'kerusi_id' => 'N.17', 'state_id' => '13', 'name' => 'TARAT'],

            ['id' => '19918', 'parliament_id' => '19900', 'kerusi_id' => 'N.18', 'state_id' => '13', 'name' => 'TEBEDU'],
            ['id' => '19919', 'parliament_id' => '19900', 'kerusi_id' => 'N.19', 'state_id' => '13', 'name' => 'KEDUP'],

            ['id' => '20020', 'parliament_id' => '20000', 'kerusi_id' => 'N.20', 'state_id' => '13', 'name' => 'SADONG JAYA'],
            ['id' => '20021', 'parliament_id' => '20000', 'kerusi_id' => 'N.21', 'state_id' => '13', 'name' => 'SIMUNJAN'],

            ['id' => '20122', 'parliament_id' => '20100', 'kerusi_id' => 'N.22', 'state_id' => '13', 'name' => 'SEBUYAU'],
            ['id' => '20123', 'parliament_id' => '20100', 'kerusi_id' => 'N.23', 'state_id' => '13', 'name' => 'LINGGA'],
            ['id' => '20124', 'parliament_id' => '20100', 'kerusi_id' => 'N.24', 'state_id' => '13', 'name' => 'BETING MARO'],

            ['id' => '20225', 'parliament_id' => '20200', 'kerusi_id' => 'N.25', 'state_id' => '13', 'name' => 'BALAI RINGIN'],
            ['id' => '20226', 'parliament_id' => '20200', 'kerusi_id' => 'N.26', 'state_id' => '13', 'name' => 'BUKIT BEGUNAN'],
            ['id' => '20227', 'parliament_id' => '20200', 'kerusi_id' => 'N.27', 'state_id' => '13', 'name' => 'SIMANGGANG'],

            ['id' => '20328', 'parliament_id' => '20300', 'kerusi_id' => 'N.28', 'state_id' => '13', 'name' => 'ENGKILILI'],
            ['id' => '20329', 'parliament_id' => '20300', 'kerusi_id' => 'N.29', 'state_id' => '13', 'name' => 'BATANG AI'],

            ['id' => '20430', 'parliament_id' => '20400', 'kerusi_id' => 'N.30', 'state_id' => '13', 'name' => 'SARIBAS'],
            ['id' => '20431', 'parliament_id' => '20400', 'kerusi_id' => 'N.31', 'state_id' => '13', 'name' => 'LAYAR'],
            ['id' => '20432', 'parliament_id' => '20400', 'kerusi_id' => 'N.32', 'state_id' => '13', 'name' => 'BUKIT SABAN'],

            ['id' => '20533', 'parliament_id' => '20500', 'kerusi_id' => 'N.33', 'state_id' => '13', 'name' => 'KALAKA'],
            ['id' => '20534', 'parliament_id' => '20500', 'kerusi_id' => 'N.34', 'state_id' => '13', 'name' => 'KRIAN'],

            ['id' => '20635', 'parliament_id' => '20600', 'kerusi_id' => 'N.35', 'state_id' => '13', 'name' => 'BELAWAI'],
            ['id' => '20636', 'parliament_id' => '20600', 'kerusi_id' => 'N.36', 'state_id' => '13', 'name' => 'SEMOP'],

            ['id' => '20737', 'parliament_id' => '20700', 'kerusi_id' => 'N.37', 'state_id' => '13', 'name' => 'DARO'],
            ['id' => '20738', 'parliament_id' => '20700', 'kerusi_id' => 'N.38', 'state_id' => '13', 'name' => 'JEMORENG'],

            ['id' => '20839', 'parliament_id' => '20800', 'kerusi_id' => 'N.39', 'state_id' => '13', 'name' => 'REPOK'],
            ['id' => '20840', 'parliament_id' => '20800', 'kerusi_id' => 'N.40', 'state_id' => '13', 'name' => 'MERADONG'],

            ['id' => '20941', 'parliament_id' => '20900', 'kerusi_id' => 'N.41', 'state_id' => '13', 'name' => 'PAKAN'],
            ['id' => '20942', 'parliament_id' => '20900', 'kerusi_id' => 'N.42', 'state_id' => '13', 'name' => 'MELUAN'],

            ['id' => '21043', 'parliament_id' => '21000', 'kerusi_id' => 'N.43', 'state_id' => '13', 'name' => 'NGEMAH'],
            ['id' => '21044', 'parliament_id' => '21000', 'kerusi_id' => 'N.44', 'state_id' => '13', 'name' => 'MACHAN'],

            ['id' => '21145', 'parliament_id' => '21100', 'kerusi_id' => 'N.45', 'state_id' => '13', 'name' => 'BUKIT ASSEK'],
            ['id' => '21146', 'parliament_id' => '21100', 'kerusi_id' => 'N.46', 'state_id' => '13', 'name' => 'DUDONG'],

            ['id' => '21247', 'parliament_id' => '21200', 'kerusi_id' => 'N.47', 'state_id' => '13', 'name' => 'BAWANG ASSAN'],
            ['id' => '21248', 'parliament_id' => '21200', 'kerusi_id' => 'N.48', 'state_id' => '13', 'name' => 'PELAWAN'],
            ['id' => '21249', 'parliament_id' => '21200', 'kerusi_id' => 'N.49', 'state_id' => '13', 'name' => 'NANGKA'],

            ['id' => '21350', 'parliament_id' => '21300', 'kerusi_id' => 'N.50', 'state_id' => '13', 'name' => 'DALAT'],
            ['id' => '21351', 'parliament_id' => '21300', 'kerusi_id' => 'N.51', 'state_id' => '13', 'name' => 'BALINGIAN'],

            ['id' => '21452', 'parliament_id' => '21400', 'kerusi_id' => 'N.52', 'state_id' => '13', 'name' => 'TAMIN'],
            ['id' => '21453', 'parliament_id' => '21400', 'kerusi_id' => 'N.53', 'state_id' => '13', 'name' => 'KAKUS'],

            ['id' => '21554', 'parliament_id' => '21500', 'kerusi_id' => 'N.54', 'state_id' => '13', 'name' => 'PELAGUS'],
            ['id' => '21555', 'parliament_id' => '21500', 'kerusi_id' => 'N.55', 'state_id' => '13', 'name' => 'KATIBAS'],

            ['id' => '21656', 'parliament_id' => '21600', 'kerusi_id' => 'N.56', 'state_id' => '13', 'name' => 'BALEH'],
            ['id' => '21657', 'parliament_id' => '21600', 'kerusi_id' => 'N.57', 'state_id' => '13', 'name' => 'BELAGA'],

            ['id' => '21758', 'parliament_id' => '21700', 'kerusi_id' => 'N.58', 'state_id' => '13', 'name' => 'JEPAK'],
            ['id' => '21759', 'parliament_id' => '21700', 'kerusi_id' => 'N.59', 'state_id' => '13', 'name' => 'KIDURONG'],
            ['id' => '21760', 'parliament_id' => '21700', 'kerusi_id' => 'N.60', 'state_id' => '13', 'name' => 'KEMENA'],

            ['id' => '21861', 'parliament_id' => '21800', 'kerusi_id' => 'N.61', 'state_id' => '13', 'name' => 'BEKENU'],
            ['id' => '21862', 'parliament_id' => '21800', 'kerusi_id' => 'N.62', 'state_id' => '13', 'name' => 'LAMBIR'],

            ['id' => '21963', 'parliament_id' => '21900', 'kerusi_id' => 'N.63', 'state_id' => '13', 'name' => 'PIASAU'],
            ['id' => '21964', 'parliament_id' => '21900', 'kerusi_id' => 'N.64', 'state_id' => '13', 'name' => 'PUJUT'],
            ['id' => '21965', 'parliament_id' => '21900', 'kerusi_id' => 'N.65', 'state_id' => '13', 'name' => 'SENADIN'],

            ['id' => '22066', 'parliament_id' => '22000', 'kerusi_id' => 'N.66', 'state_id' => '13', 'name' => 'MARUDI'],
            ['id' => '22067', 'parliament_id' => '22000', 'kerusi_id' => 'N.67', 'state_id' => '13', 'name' => 'TELANG USAN'],

            ['id' => '22168', 'parliament_id' => '22100', 'kerusi_id' => 'N.68', 'state_id' => '13', 'name' => 'BUKIT KOTA'],
            ['id' => '22169', 'parliament_id' => '22100', 'kerusi_id' => 'N.69', 'state_id' => '13', 'name' => 'BATU DANAU'],

            ['id' => '22270', 'parliament_id' => '22200', 'kerusi_id' => 'N.70', 'state_id' => '13', 'name' => "BA' KELALAN"],
            ['id' => '22271', 'parliament_id' => '22200', 'kerusi_id' => 'N.71', 'state_id' => '13', 'name' => 'BUKIT SARI']
        ]
        );
    }
}