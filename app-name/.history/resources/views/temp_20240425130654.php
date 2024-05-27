<?php
	function HappyMeError() {
		?>
		<style type="text/css" scoped="scoped">
        #PaymentErrorContainer-desktop {
            padding-top: 64px;
            width: 1440px;
            height: 758px;
        }

        #PaymentErrorContainer{
            background-image: url(/wp-content/uploads/2023/08/banner-error.png);
            background-repeat: no-repeat;
            background-size: cover;
            margin-left: -90px;
            margin-right: -90px;
            display:block;
        }
        #wording-failed{
            font-family:VAG-Rounded-Bold;
            margin:0%;
            padding-top:12px;
            margin-top: 48px;
        }
        #PaymentMessageContainer{
            width: 588px;
            height: auto;
            color:#5F737F;
            font-size:16px;
            margin-left: auto;
            margin-right: auto;
        }
        #PaymentErrorContainer-mobile{
            display:none;
        }
        .button-kembali:hover{
            cursor: pointer;
            color:#D4D4D4;

        }
        #PaymentErrorContainer-desktop{
            padding-top:50px;
            margin-top: 200px;
        }
        .error-content{
            margin-top: -370px;
            padding: 50px;
            /* padding:50px; */
        }
        .button-kembali{
            width: 168px;
            background-color: #005BAA;
            color: #FFFFFF;
            text-align: center;
            border-radius: 4px;
            font-family: VAG-Rounded-Bold;
            height: 42px;
            margin-bottom: 86px;
        /* padding: 10px; */
            display: flex;
            justify-content: center;
            align-items: center;

        }
        #button-back{
            display:flex;
            justify-content:center;
            padding-bottom: 50px;
        }
        .text-center{
            margin-top: 64px;
        }
        #wording-failed{
            font-size: 26px;
            line-height: 32px;
            align-items: center;
        }

        .centered-link {
                text-align: center;
                margin-top: 48px;
                margin-bottom: 48px;
                position: relative;
            }

            .centered-link a {
                color: dodgerblue;
                text-decoration: none;
                position: relative;
            }

            .centered-link a::after {
                content: '';
                display: block;
                width: 100%;
                height: 2px;
                background-color: dodgerblue;
                position: absolute;
                bottom: -2px;
                left: 0;
                transform: scaleX(0);
                transform-origin: center;
                transition: transform 0.3s ease;
            }

            .centered-link a:hover::after {
                transform: scaleX(1);
            }

        @media screen and (max-width:721px) {
            #PaymentErrorContainer{
                display:none;
            }
            #PaymentErrorContainer-desktop {
                display:none;
            }
            #PaymentErrorContainer-mobile{
                display:block;
                padding-top: 100px;
                padding-bottom: 50px;
            }
            #PaymentMessageContainer{
                width:328px;
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            }

		}
	</style>
        <body>
            <div id='PaymentErrorContainer'>
                <div id="PaymentErrorContainer-desktop">
                    <div class="error-content">
                        <div class='text-center' >
                            <?php echo '<img alt="contact-center" class="contact-center" src="' . plugins_url('../../images/Error-logo.png', _FILE_) . '" > '; ?>
                        </div>
                        <h2 class='happy-color-dark-black text-center' id="wording-failed">Maaf, formulir asuransi ini telah ditutup. </h2>
                        <p id ='PaymentMessageContainer' class='happy-color-dark-grey text-center' >Mohon tunggu pengiriman dokumen Asuransi Mikro Garda Me Micro pada email kamu maksimal 14 hari kerja. Periode polis asuransi dimulai H+3 jam 12.00 waktu setempat setelah submit form asuransi ini.</p>
                        <div class="centered-link">
                            <a href="#">Syarat dan ketentuan program</a>
                        </div>
                        <div class='happy-color-dark-blue text-center' id='button-back'>
                            <div class='button-kembali'>
                                KEMBALI
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id='PaymentErrorContainer-mobile'>
                <div class='text-center'>
                    <?php echo '<img alt="contact-center" class="contact-center" src="' . plugins_url('../../images/Error-logo.png', _FILE_) . '" > '; ?>
                </div>
                <h2 class='happy-color-dark-black text-center' id="wording-failed">Maaf, formulir asuransi ini telah ditutup.</h2>
                <p id ='PaymentMessageContainer' class='happy-color-dark-grey text-center' >Mohon tunggu pengiriman dokumen Asuransi Mikro Garda Me Micro pada email kamu maksimal 14 hari kerja. Periode polis asuransi dimulai H+3 jam 12.00 waktu setempat setelah submit form asuransi ini.</p>
                <div class="centered-link">
                    <a href="#">Syarat dan ketentuan program</a>
                </div>
                <div class='happy-color-dark-blue text-center' id='button-back'>
                    <div class='button-kembali'>
                        KEMBALI
                    </div>
                </div>
            </div>
        </body>
	<?php
	}
?>
