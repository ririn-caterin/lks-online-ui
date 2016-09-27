<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/my-lks.css">
<script type="text/javascript" src="<?=base_url();?>assets/js/lks.js"></script>
<script type="text/javascript">
    var TIME_LEFT = '<?=$duration;?>';
    var LKS_ID = '<?=$lks_id;?>';
    var areYouReallySure = false;

    var myEvent = window.attachEvent || window.addEventListener;
    var checkEvent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compatable
    myEvent(checkEvent, function(e) { // For >=IE7, Chrome, Firefox
        var confirmationMessage = 'Anda yakin akan me-reload/keluar dari halaman pengerjaan soal?\nSemua progres pengerjaan soal yang sedang berjalan tidak akan tersimpan.\n\nPENGERJAAN AKAN DIANGGAP GAGAL!';  // a space
        (e || window.event).returnValue = confirmationMessage;
        return confirmationMessage;
    });

    document.onmousedown=disableclick;
    status="Klik Kanan Non-Aktif";
    function disableclick(event)
    {
      if(event.button==1)
       {
         alert(status);
         return false;
       }
    }
</script>


    <div class="row bg-title-page">
        <div class="container paddingleft0" >
            <div id="question-ui" class="col-md-8">
                <font class="title-page" id="exam-name"></font>
            </div>
            <div class="col-md-4 paddingright0">
                <div class="floatright">
                    <font class="font-sisawaktu">Sisa Waktu:</font>
                    <form id="exam-timer">
                        <input value="" readonly="readonly"
                            name="time_left" id="exam-time-left" class="my-countdown" 
                        >
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-bottom-30">
        <div>
            <div id="loading">
                <h1 style="font-size: 1.2em">LKS sedang dipersiapkan, silahkan menunggu...</h1>
            </div>

            <div id="submitting" style="display: none;">
                <h1 style="font-size: 1.2em">Hasil LKS sedang disimpan...</h1>
            </div>

            <div id="error-mesage" style="display: none;">
                <h1>Terjadi error.</h1>
                <p id="error-text"></p>
            </div>
        </div>
        <div id="sub_title">
            <div id="question-ui">
                <div class="soal-ke">
                    Soal ke- <span id="question-index"></span> / <span id="question-count"></span>
                </div>
                
                <fieldset id="exam-question">
                    <div id="question-text" style="margin-bottom: 10px"></div>
                    <div><ul id="answers" class="unstyled"></ul></div>
                </fieldset>
                <div>
                    <text><b>Navigasi Pertanyaan:</b></text>
                    <div id="navigation-area"></div>
                </div>
                <div>
                    <input type="button" value="Simpan Jawaban" id="record-answer-button" class="tombol-simpanjawaban">
                    <input type="button" value="Lanjut" id="skip-button" class="tombol-skippertanyaan">
                    <input type="button" value="Selesai Mengerjakan" id="finish-exam-button" class="tombol-selesaikerjakan">
                </div>
                <input id="question-id" name="question_id" value="" type="hidden">
            </div>
        </div>
    </div>
