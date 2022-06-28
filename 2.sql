SELECT a.mhs_id, a.mhs_nama, a.mhs_nim, b.nilai, b.mk_id, c.mk_code, c.mk_nama, c.mk_sks
FROM tb_mahasiswa as a
    left JOIN tb_mahasiswa_nilai as b on a.mhs_id = b.mhs_id
    left JOIN tb_matakuliah as c on b.mk_id = c.mk_id
where c.mk_code = 'MK303'
ORDER BY b.nilai DESC
limit 1