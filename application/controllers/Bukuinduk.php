<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Bukuinduk extends CI_Controller { public function __construct() { goto nMD00; WkGJF: TJc69: goto T49YH; uV2Vs: Ruu2f: goto be5uE; FDsiq: show_error("\x48\x61\156\x79\x61\x20\x41\x64\155\151\156\151\163\x74\x72\x61\164\x6f\x72\40\x79\x61\156\x67\40\x64\x69\x62\145\162\151\x20\x68\141\153\40\165\x6e\164\165\x6b\x20\x6d\145\156\x67\x61\x6b\163\x65\x73\x20\x68\141\154\x61\x6d\141\156\40\151\x6e\151\54\40\74\x61\x20\x68\162\x65\146\75\42" . base_url("\x64\x61\163\x68\x62\x6f\141\x72\144") . "\42\x3e\x4b\x65\155\x62\141\154\151\40\x6b\145\40\155\x65\x6e\x75\x20\141\x77\141\154\x3c\x2f\x61\76", 403, "\101\x6b\163\x65\163\x20\x54\145\162\154\x61\162\x61\156\147"); goto WkGJF; WfiSd: $this->form_validation->set_error_delimiters('', ''); goto cbd3T; nMD00: parent::__construct(); goto NY7n6; z2cBP: redirect("\141\x75\x74\x68"); goto uV2Vs; NY7n6: if (!$this->ion_auth->logged_in()) { goto eL27k; } goto UUK9t; UUK9t: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\x75"))) { goto TJc69; } goto FDsiq; be5uE: $this->load->library(["\144\141\164\141\164\x61\x62\x6c\x65\x73", "\x66\x6f\162\155\137\166\x61\154\x69\x64\141\x74\151\157\x6e"]); goto WfiSd; JqUJs: eL27k: goto z2cBP; T49YH: goto Ruu2f; goto JqUJs; cbd3T: } public function output_json($data, $encode = true) { goto NpTre; MZnV_: $data = json_encode($data); goto DE4pa; NpTre: if (!$encode) { goto jV2WT; } goto MZnV_; nShwm: $this->output->set_content_type("\141\160\x70\x6c\151\x63\141\164\x69\157\156\57\x6a\x73\157\x6e")->set_output($data); goto Z7kA5; DE4pa: jV2WT: goto nShwm; Z7kA5: } function generateTahunMasuk($tp, $level) { goto Mbk1g; txHwY: L1vUy: goto sDp6u; hEIq6: if ($level == 9) { goto Z18qc; } goto rMJV2; c3RPs: fVxPL: goto FE3dC; f3xO9: $thn = $tahun - 2; goto SlzMV; m0_3X: goto fVxPL; goto txHwY; SlzMV: goto fVxPL; goto DTnMr; Mbk1g: $tahun = explode("\57", $tp ?? '')[0]; goto aslXD; DTnMr: gC72e: goto M4Du2; FE3dC: return $thn; goto AGpjY; rMJV2: if ($level == 8) { goto gC72e; } goto dwEgi; BIPEk: Z18qc: goto f3xO9; pzguN: goto fVxPL; goto BIPEk; aslXD: $thn = $tahun; goto hEIq6; M4Du2: $thn = $tahun - 1; goto m0_3X; sDp6u: $thn = $tahun; goto c3RPs; dwEgi: if ($level == 7) { goto L1vUy; } goto pzguN; AGpjY: } public function index() { goto h16aK; oru7u: $count_induk = $this->db->count_all("\142\165\153\165\x5f\x69\156\x64\165\153"); goto HLigX; oul1S: foreach ($uids as $uid) { goto jVjdl; O40Ij: ICmLD: goto bfQb7; jVjdl: $check = $this->db->select("\151\144\137\163\x69\x73\167\x61")->from("\142\165\153\165\137\151\156\x64\x75\x6b")->where("\x69\144\137\163\151\163\x77\x61", $uid->id_siswa); goto hhgfR; TCxZ8: AG3RN: goto O40Ij; kg7gn: $this->db->insert("\x62\165\153\165\x5f\x69\x6e\x64\165\153", $uid); goto TCxZ8; hhgfR: if (!($check->get()->num_rows() == 0)) { goto AG3RN; } goto kg7gn; bfQb7: } goto MNI21; HLigX: if (!($count_siswa > $count_induk)) { goto n8DYv; } goto ux9Qn; j4pja: $data["\x70\162\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto vf_k6; MDrEs: $arrTp = $this->dashboard->getTahun(); goto DJI47; skS0W: $data["\x61\162\162\x5f\164\145\163\x74"] = $thn_siswa; goto WOOgk; b3AAY: $data_siswa = []; goto PMMHM; P8obl: $data["\163\x6d\x74\x5f\x61\143\164\151\x76\x65"] = $smt; goto j4pja; ttlbd: YbRAm: goto WpeBe; lgOFH: $tp = $this->dashboard->getTahunActive(); goto Uao8k; DJI47: $arrSmt = $this->dashboard->getSemester(); goto lgOFH; WQXZT: $this->load->view("\137\164\x65\155\160\x6c\141\x74\x65\x73\x2f\x64\x61\x73\x68\142\x6f\x61\x72\x64\x2f\137\150\145\141\x64\145\x72", $data); goto kkEcD; EliJf: $this->load->view("\x5f\x74\x65\155\x70\154\x61\164\x65\x73\x2f\x64\141\x73\x68\x62\x6f\141\162\144\57\x5f\146\x6f\x6f\x74\145\x72"); goto kG8mR; hZPaw: $this->load->model("\104\141\x73\150\142\157\141\162\x64\137\155\157\144\x65\x6c", "\x64\x61\163\150\x62\157\141\x72\144"); goto MHO42; rthE7: foreach ($siswas as $id_siswa => $siswa) { goto Qxag3; XM4E5: hO2aL: goto bZRKV; x8p07: $berat = []; goto RSHbj; noIcK: lkmji: goto hYM0v; hdtOm: goto H2mgD; goto Rvto0; RwNjU: H2mgD: goto x8p07; njuPY: vgJsI: goto gztlu; ULts8: $tahunMasuk = explode("\55", $siswa->tahun_masuk)[0]; goto noIcK; Rvto0: FsOVc: goto tKuu0; KFvgP: goto lkmji; goto ldLOp; bZRKV: if ($siswa->tahun_masuk != null) { goto S31ET; } goto NpuxQ; FrYnX: $kelainan = []; goto LHefL; Qxag3: $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : []; goto WTwJR; shLHO: $noinduk[$siswa->id_siswa] = ["\156\151\x73" => $siswa->nis, "\x6e\151\163\156" => $siswa->nisn]; goto I640D; LHefL: foreach ($data_tahun as $dtp) { goto uR_3q; O92MD: cVKaZ: goto uuGVP; UkQqm: W2mfj: goto O92MD; IPMeF: foreach ($rapor_fisik[$dtp]->fisik as $rf) { goto HXfRK; kLPhU: zHjkS: goto xdWEJ; HXfRK: $berat[$dtp][$rf->id_smt] = $rf->berat; goto piF8P; piF8P: $tinggi[$dtp][$rf->id_smt] = $rf->tinggi; goto kLPhU; xdWEJ: } goto LYnnl; ORpWv: $tinggi[$dtp][2] = ''; goto XWMpn; XWMpn: $penyakit[$dtp][1] = ''; goto ceQur; bUCWE: $kelainan[$dtp][2] = ''; goto lNn_o; uR_3q: $berat[$dtp][1] = ''; goto OTzkG; uF6U_: $tinggi[$dtp][1] = ''; goto ORpWv; LYnnl: oQ7CE: goto UkQqm; OTzkG: $berat[$dtp][2] = ''; goto uF6U_; hvhuZ: $kelainan[$dtp][1] = ''; goto bUCWE; ceQur: $penyakit[$dtp][2] = ''; goto hvhuZ; lNn_o: if (!isset($rapor_fisik[$dtp])) { goto W2mfj; } goto IPMeF; uuGVP: } goto i1lfm; tKuu0: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\57" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\57" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\x2f" . (intval($tahunMasuk) + 6)]; goto RwNjU; NpuxQ: $tahunMasuk = ''; goto KFvgP; hYM0v: if ($setting->jenjang == "\x31") { goto FsOVc; } goto FKVp3; sABKX: $penyakit = []; goto FrYnX; ldLOp: S31ET: goto ULts8; WTwJR: foreach ($rapor_fisik as $rf) { goto vafQF; wwsPR: GTecH: goto Xa3B9; vafQF: $rf->fisik = unserialize($rf->fisik); goto OjcnS; OjcnS: foreach ($rf->fisik as $value) { $value->kondisi = unserialize($value->kondisi); l7v2P: } goto wwsPR; Xa3B9: eguXr: goto RUsUn; RUsUn: } goto XM4E5; FKVp3: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3)]; goto hdtOm; RSHbj: $tinggi = []; goto sABKX; i1lfm: whjhR: goto shLHO; I640D: $data_siswa[$siswa->id_siswa] = ["\156\x69\163" => $siswa->nis, "\156\151\163\156" => $siswa->nisn, "\160\141\x67\145\61" => ["\x41" => ["\x74\151\x74\x6c\x65" => "\x4b\105\x54\105\x52\101\116\x47\x41\116\40\124\105\x4e\124\x41\116\107\40\104\x49\122\x49\40\x53\111\x53\x57\x41", "\166\141\x6c\165\x65" => ["\x4e\x61\x6d\141\x20\x53\151\x73\167\x61" => ["\x4e\x61\155\141\40\x4c\145\x6e\x67\153\141\160" => $siswa->nama, "\x4e\x61\155\x61\40\120\141\156\x67\147\x69\x6c\141\x6e" => ''], "\112\145\156\151\163\x20\113\x65\x6c\x61\x6d\x69\156" => $siswa->jenis_kelamin, "\x54\145\x6d\x70\141\164\x20\x64\141\156\x20\124\147\154\40\x4c\141\x68\x69\162" => $siswa->tempat_lahir, "\101\x67\x61\x6d\x61" => $siswa->agama, "\113\x65\x77\x61\162\x67\x61\x6e\x65\147\141\162\x61\x61\156" => $siswa->warga_negara, "\101\x6e\141\153\x20\153\145" => $siswa->anak_ke, "\112\165\155\154\141\150\40\123\144\x72\56\40\x4b\141\156\x64\165\x6e\147" => '', "\x4a\165\155\154\141\x68\x20\x53\x64\162\x2e\40\x54\151\162\151" => '', "\112\x75\x6d\154\x61\x68\40\x53\x64\162\x2e\x20\101\156\x67\153\141\x74" => '', "\x41\156\x61\153\x20\x59\x61\164\x69\155\x2f\x59\141\x74\x69\155\x20\120\x69\x61\x74\165" => '', "\102\x61\x68\141\x73\x61\x20\123\x65\150\141\162\151\55\150\141\x72\x69" => '']], "\x42" => ["\x74\151\x74\154\145" => "\113\105\124\105\122\101\116\107\x41\x4e\40\x54\x45\115\x50\x41\x54\x20\x54\x49\116\x47\107\x41\x4c", "\166\x61\154\x75\x65" => ["\x41\154\141\x6d\x61\164" => $siswa->alamat, "\x4e\157\x6d\157\x72\x20\124\145\x6c\x65\x70\x6f\x6e" => $siswa->hp, "\x54\151\156\x67\x67\x61\x6c\x20\x42\145\162\x73\141\x6d\141" => '', "\x4a\x61\x72\x61\x6b\x20\153\145\40\123\x65\153\x6f\154\x61\150" => '']], "\x43" => ["\164\151\x74\x6c\145" => "\x4b\105\x54\x45\122\x41\116\x47\x41\x4e\40\113\x45\x53\105\110\x41\124\101\116", "\x76\141\154\165\145" => ["\x47\157\x6c\x6f\x6e\x67\x61\156\x20\104\x61\162\141\150" => '', "\113\145\141\144\141\141\x6e\40\x4a\141\163\x6d\141\156\151" => "\x5b\x74\x61\142\154\x65\x5d"], "\x74\141\x62\x6c\x65" => ["\164\141\x68\165\156" => $data_tahun, "\142\x65\x72\141\x74" => $berat, "\x74\x69\x6e\147\x67\151" => $tinggi, "\160\x65\156\x79\x61\x6b\x69\x74" => $penyakit, "\x6b\145\x6c\141\151\156\x61\x6e" => $kelainan]], "\x44" => ["\x74\x69\x74\154\x65" => "\x4b\x45\x54\105\x52\101\x4e\107\101\x4e\40\x50\105\116\x44\111\x44\111\113\101\x4e", "\166\141\x6c\165\145" => ["\120\145\156\144\x69\x64\151\x6b\141\156\x20\x53\145\142\145\154\165\155\x6e\x79\x61" => ["\x4c\165\154\165\163\x61\x6e\40\104\x61\162\151" => $siswa->sekolah_asal, "\116\157\155\x6f\162\40\111\152\x61\x7a\x61\x68" => ''], "\120\151\156\x64\x61\x68\x61\x6e" => ["\x44\x61\x72\x69\x20\123\145\153\157\x6c\141\x68" => '', "\101\154\x61\x73\x61\x6e" => ''], "\104\151\164\145\x72\x69\x6d\x61\x20\104\x69\x73\x65\x6b\157\x6c\x61\150\x20\x49\156\151" => ["\x44\151\x20\x54\151\156\x67\x6b\x61\x74" => $siswa->kelas_awal, "\113\145\x6c\x6f\155\160\x6f\153" => '', "\x4a\165\162\x75\163\x61\x6e" => '', "\x54\141\156\x67\147\x61\154" => $siswa->tahun_masuk]]]], "\160\x61\x67\145\x32" => ["\105" => ["\x74\151\x74\154\x65" => "\113\x45\124\x45\x52\x41\x4e\107\x41\x4e\x20\x54\x45\x4e\x54\x41\116\x47\x20\x41\131\x41\110\x20\x4b\101\116\104\x55\116\107", "\166\141\154\165\x65" => ["\x4e\141\x6d\x61" => $siswa->nama_ayah, "\124\x65\155\160\x61\x74\x20\144\141\x6e\x20\124\x61\x6e\147\x67\141\x6c\40\114\x61\150\x69\162" => $siswa->tgl_lahir_ayah, "\101\x67\141\155\141" => '', "\x4b\x65\167\x61\x72\147\x61\156\145\147\x61\162\x61\x61\156" => '', "\x50\x65\156\x64\151\x64\151\x6b\x61\x6e" => $siswa->pendidikan_ayah, "\x50\145\153\x65\x72\152\x61\x61\x6e" => $siswa->pekerjaan_ayah, "\120\x65\156\x67\150\x61\163\151\x6c\141\x6e\x20\160\145\162\x20\x42\165\x6c\141\x6e" => '', "\x41\154\x61\155\141\x74\40\x2f\x20\116\157\x6d\x6f\x72\40\124\145\x6c\x65\x70\x6f\156" => $siswa->nohp_ayah, "\113\x65\x62\145\x72\141\144\141\141\x6e\40\x41\x79\141\150" => "\x4d\x61\163\151\x68\40\110\151\x64\165\160\x20\x2f\40\115\145\x6e\x69\156\x67\147\141\x6c\40\x44\x75\156\151\141\40\x54\x61\150\165\x6e\72\x20\56\56\x2e\56\56\x2e\x2e\x2e"]], "\x46" => ["\x74\151\164\154\x65" => "\x4b\x45\124\105\x52\101\116\107\101\116\40\x54\x45\x4e\124\x41\x4e\107\x20\111\102\125\40\x4b\101\x4e\x44\x55\116\107", "\x76\141\154\x75\145" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\124\145\155\x70\141\x74\x20\144\x61\x6e\40\x54\141\156\147\x67\x61\154\x20\x4c\141\x68\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\147\141\x6d\141" => '', "\x4b\145\x77\141\162\x67\141\x6e\x65\147\141\x72\x61\x61\x6e" => '', "\x50\145\156\x64\151\144\x69\153\x61\x6e" => $siswa->pendidikan_ayah, "\120\x65\x6b\x65\162\152\141\x61\x6e" => $siswa->pekerjaan_ayah, "\x50\x65\156\x67\150\141\163\x69\154\141\156\x20\x70\145\x72\40\102\x75\x6c\x61\156" => '', "\101\x6c\141\x6d\x61\x74\x20\57\x20\x4e\x6f\155\157\162\40\x54\x65\x6c\145\x70\157\x6e" => $siswa->nohp_ayah, "\x4b\145\x62\x65\162\141\x64\141\x61\156\40\111\142\165" => "\x4d\141\163\151\x68\40\110\x69\144\x75\160\x20\x2f\40\115\145\x6e\x69\156\x67\x67\141\x6c\40\104\x75\x6e\x69\x61\x20\124\141\x68\x75\x6e"]], "\x47" => ["\x74\151\164\x6c\145" => "\113\105\124\105\x52\x41\x4e\x47\x41\x4e\40\124\x45\116\x54\101\x4e\x47\40\127\x41\x4c\x49", "\166\141\154\165\145" => ["\x4e\141\x6d\x61" => $siswa->nama_ayah, "\124\x65\155\x70\x61\164\40\144\x61\x6e\40\x54\x61\156\147\147\x61\x6c\40\x4c\141\x68\151\162" => $siswa->tgl_lahir_ayah, "\101\x67\x61\x6d\141" => '', "\x4b\145\x77\x61\162\147\141\x6e\x65\x67\x61\162\x61\141\156" => '', "\120\145\x6e\144\151\144\x69\153\x61\x6e" => $siswa->pendidikan_ayah, "\120\x65\x6b\x65\162\152\141\x61\x6e" => $siswa->pekerjaan_ayah, "\x50\145\x6e\147\x68\x61\163\151\x6c\x61\156\40\x70\145\162\40\102\165\x6c\x61\156" => '', "\x41\x6c\x61\x6d\141\164\x20\x2f\x20\116\157\x6d\157\x72\x20\x54\x65\154\145\160\157\x6e" => $siswa->nohp_ayah]], "\x48" => ["\164\151\x74\x6c\x65" => "\113\x45\x47\x45\115\101\x52\x41\x4e\x20\123\111\123\x57\101", "\166\x61\154\x75\x65" => ["\113\145\x73\145\156\x69\141\156" => '', "\x4f\x6c\x61\150\40\x52\141\147\x61" => '', "\117\162\x67\x61\156\x69\163\x61\163\151" => '', "\x4c\141\151\156\342\200\x93\154\x61\x69\156" => '']]], "\160\141\147\145\63" => ["\111" => ["\164\x69\164\x6c\145" => "\x4b\x45\124\x45\x52\101\116\x47\101\116\x20\120\105\x52\113\x45\115\102\x41\x4e\x47\x41\x4e\40\x53\x49\123\x57\x41", "\166\141\154\165\x65" => ["\x4d\145\x6e\x65\162\x69\155\x61\x20\x42\145\x61\40\x53\x69\x73\167\x61" => "\x5b\164\141\150\x75\156\x5d", "\115\x65\x6e\x69\156\147\x67\141\x6c\x6b\x61\x6e\40\x53\145\x6b\x6f\x6c\x61\150" => ["\124\141\x6e\147\147\141\x6c" => '', "\x41\154\x61\163\141\156" => ''], "\x41\153\150\x69\162\40\x50\145\156\x64\151\144\x69\x6b\141\156" => ["\x54\141\155\x61\164\40\102\145\154\141\x6a\x61\x72" => $siswa->tahun_lulus, "\x4e\x6f\x6d\157\162\40\111\152\x61\172\141\x68" => $siswa->no_ijazah]], "\x74\141\150\165\156" => ["\124\141\150\x75\x6e\40\x2e\x2e\x2e\56\x2e\56\x2e\56\x2e\x2e\56\x2e\57\x20\124\x4b\40\342\x80\246\xe2\200\246\xe2\x80\246\xe2\x80\xa6\xe2\x80\xa6\xe2\200\246\xe2\x80\246\342\x80\246\x2e\x2e\144\141\x72\151\342\200\xa6\342\200\246\342\200\xa6\342\x80\xa6\342\x80\246\342\200\246\342\x80\xa6\xe2\x80\xa6\x2e\56", "\124\141\150\x75\x6e\x20\x2e\x2e\x2e\x2e\x2e\56\x2e\x2e\56\56\x2e\x2e\x2f\40\124\113\x20\xe2\x80\246\xe2\x80\246\xe2\200\xa6\342\200\246\342\x80\xa6\342\x80\xa6\xe2\x80\xa6\xe2\200\246\56\56\x64\x61\162\x69\342\x80\xa6\xe2\x80\xa6\xe2\x80\xa6\342\x80\xa6\342\200\xa6\342\x80\246\xe2\x80\246\xe2\200\xa6\x2e\56", "\x54\x61\x68\x75\156\x20\56\56\56\x2e\x2e\x2e\56\56\x2e\x2e\56\56\57\x20\x54\x4b\x20\xe2\x80\xa6\342\200\246\342\200\246\xe2\x80\xa6\xe2\x80\xa6\342\x80\xa6\342\x80\246\342\x80\xa6\x2e\x2e\144\141\x72\x69\342\x80\xa6\xe2\200\xa6\xe2\x80\xa6\342\200\246\342\x80\246\342\x80\xa6\342\200\xa6\xe2\200\xa6\x2e\x2e"]], "\x4a" => ["\164\x69\x74\x6c\x65" => "\113\105\124\105\x52\101\116\x47\x41\116\x20\x53\105\x54\105\114\x41\x48\40\x53\x45\x4c\105\123\x41\x49\40\120\105\x4e\104\x49\x44\x49\113\x41\116", "\166\x61\154\165\x65" => ["\x4d\145\x6c\141\156\x6a\165\x74\x6b\x61\x6e\x20\144\151" => '', "\x42\145\153\145\162\x6a\x61" => ["\124\x61\156\x67\x67\x61\x6c\40\x4d\165\154\x61\x69\40\102\x65\x6b\145\162\152\141" => '', "\x4e\141\x6d\x61\x20\x54\145\155\x70\141\164\40\x42\x65\x6b\145\x72\x6a\141" => '', "\x50\145\156\x67\x68\141\x73\x69\154\141\156" => '']]], "\113" => ["\x74\x69\164\154\x65" => "\114\101\x49\x4e\x20\xe2\200\223\x20\114\x41\x49\x4e", "\x76\141\x6c\x75\145" => ["\x43\x61\164\x61\x74\x61\156\40\x59\141\156\147\40\x50\145\156\x74\x69\156\x67" => '']]]]; goto njuPY; gztlu: } goto ttlbd; Q2gmN: $siswas = $this->master->getDataInduk(); goto XahNB; fUmbg: $data["\x6e\x6f\151\156\144\x75\x6b"] = $noinduk; goto eyxu9; XahNB: $deskFisik = $this->rapor->getAllDeskripsiFisikKelas(); goto bty21; O06mR: $setting = $this->dashboard->getSetting(); goto sqA5n; h16aK: $this->load->model("\115\141\x73\164\x65\162\x5f\x6d\157\x64\x65\154", "\x6d\141\163\164\x65\162"); goto hZPaw; MHO42: $this->load->model("\122\x61\160\x6f\162\x5f\x6d\157\x64\145\x6c", "\162\x61\160\x6f\x72"); goto THs6z; PMMHM: $thn_siswa = []; goto rthE7; oWBSh: $data["\x6a\165\155\154\x61\150\137\x6c\165\x6c\165\163"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\62", $level); goto WQXZT; sqA5n: $data = ["\165\x73\145\162" => $user, "\152\165\144\165\x6c" => "\102\165\x6b\x75\x20\111\x6e\144\x75\153", "\x73\x75\142\x6a\x75\x64\x75\x6c" => "\102\165\x6b\165\40\111\x6e\144\165\x6b", "\x73\x65\x74\x74\x69\x6e\x67" => $setting]; goto MDrEs; kkEcD: $this->load->view("\x73\x65\x74\164\151\x6e\147\57\x69\156\x64\x75\153"); goto EliJf; THs6z: $user = $this->ion_auth->user()->row(); goto O06mR; ux9Qn: $uids = $this->db->select("\x69\144\137\x73\151\x73\x77\x61\54\x20\x75\151\144")->from("\155\x61\x73\x74\x65\x72\x5f\163\x69\x73\167\x61")->get()->result(); goto oul1S; WpeBe: $data["\162\141\160\157\x72\x5f\x66\151\x73\x69\x6b"] = $rapor_fisik; goto fUmbg; Uao8k: $smt = $this->dashboard->getSemesterActive(); goto SWR3G; MNI21: VQbwT: goto GheXb; GheXb: n8DYv: goto Q2gmN; tSdce: $data["\x73\155\164"] = $arrSmt; goto P8obl; WOOgk: $level = $setting->jenjang == "\61" ? "\66" : ($setting->jenjang == "\62" ? "\x39" : ($setting->jenjang == "\61" ? "\x33" : "\x31\62")); goto oWBSh; ZRAQo: $data["\144\145\164\x61\x69\154"] = $data_siswa; goto skS0W; vf_k6: $count_siswa = $this->db->count_all("\155\x61\163\x74\x65\x72\x5f\163\x69\x73\167\141"); goto oru7u; nspdx: $data["\164\x70\x5f\x61\143\164\151\x76\x65"] = $tp; goto tSdce; eyxu9: $data["\163\151\x73\167\141\x73"] = $siswas; goto ZRAQo; SWR3G: $data["\x74\160"] = $arrTp; goto nspdx; bty21: $fisik_siswa = $this->rapor->getAllRaporFisik(); goto b3AAY; kG8mR: } }