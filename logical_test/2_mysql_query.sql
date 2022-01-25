SELECT mhs.mhs_nama 
FROM `tb_mahasiswa` mhs 
RIGHT JOIN `tb_mahasiswa_nilai` nl 
ON mhs.mhs_id = nl.mhs_id 
RIGHT JOIN `tb_matakuliah` mk 
ON nl.mk_id = mk.mk_id 
WHERE mk.mk_kode='MK303' 
ORDER BY nl.nilai 
DESC LIMIT 1;