<link  rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/DataTables/datatables.min.css"/>
<script type="text/javascript" src="<?=base_url();?>assets/js/DataTables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
        {
            $('#contenttable').DataTable({
                // "scrollY"       : "200px",
                // "scrollCollapse": true,
                // "deferRender"   : true,
                "keys": true,
                "responsive": true
            });
        });
</script>

<div class="row bg-title-page">
    <div class="container">
        <div class="title-page">
            Hasil Pengerjaan LKS
        </div>
    </div>
</div>
<div class="container nopadding-350 padding-bottom50 fontsize12">
    <div class="col-md-12 nopadding">
        <div class="kotak-hasil-nilai col-md-6 col-sm-12">
            <div class="row">
                <div class="col-md-4">
                    <b>Lembar Kerja Siswa</b>
                </div>
                <div class="col-md-8">
                    <?=$result['lks_name'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <b>Durasi Pengerjaan</b>
                </div>
                <div class="col-md-8">
                    <?=$result['duration'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <b>Jawaban Benar</b>
                </div>
                <div class="col-md-8">
                    <?=$result['pointobtained'];?> soal, dari total 40 soal
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <b>Nilai</b>
                </div>
                <div class="col-md-8">
                    <?php
                        if($result['passed'])
                        {
                            echo $result['grade'].' <span class="passed">Lulus</span>';
                        }
                        else
                        {
                            echo $result['grade'].' <span class="failed">Gagal</span>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="nopadding-350 padding-bottom50 fontsize12 tabel-hasil">
        <div class="jawabansalah col-md-12">
            Daftar Jawaban Salah
        </div>
        <?php
            if(!empty($result['failedquestion']))
            {
        ?>
        <table border='1' class="datatable display" id="contenttable" >
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Pertanyaan</th>
                        <th class="text-center">Jawaban Benar</th>
                        <th class="text-center">Jawaban Anda</th>
                    </tr>
                </thead>
                <?php
                    $count = 1;
                    foreach ($result['failedquestion'] as $question)
                    {
                ?>
                    <tr>
                        <td><?=$count;?>.</td>
                        <td><?=$question['question'];?></td>
                        <td><?=$question['correct_answer'];?></td>
                        <td><?=$question['student_answer'];?></td>
                    </tr>
                <?php
                    $count ++;
                    }
                ?>

            </table>
        <?php
            }
        ?>
    </div>
    
</div>