<link rel="stylesheet" href="tunggu.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php include 'cuy.php';
// $f = $_GET['f'];
// if ($f == 'saw') {
//     echo "<script> 
//    Swal.fire(
//         'Operation Success',
//         'Data SAW berhasil disimpan',
//         'success') </script> ";
//     $page = "wp.php";
// } elseif ($f == 'wp') {
//     echo "<script> 
//    Swal.fire(
//         'Operation Success',
//         'Data WP berhasil disimpan,
//         'success') </script> ";
//     $page = "smart.php";
// } else {
//     echo "<script> 
//    Swal.fire(
//         'Operation Success',
//         'Data Wp berhasil disimpan',
//         'success') </script> ";
//     $page = "hasilnya.php";
// }
?>
<script>
    $(document).ready(function() {
        $("div").css("zoom", "140%");
    });
</script>

<head>
    <meta http-equiv="refresh" content="10;URL='hasilnya.php'" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
</head>

<body>



    <div class="loading">
        <div class="skate">
            <div class="body">
                <div class="arm back"></div>
                <div class="arm front"></div>
                <div class="leg back"></div>
                <div class="leg front"></div>
            </div>
            <div class="board">
                <svg viewBox="0 0 34 8">
                    <path d="M0.897306 0.911767C1.22218 0.30263 1.97934 0.072188 2.58848 0.397061L2.91936 0.573532C3.75214 1.01768 4.68144 1.25 5.62525 1.25H28.3752C29.3191 1.25 30.2484 1.01768 31.0811 0.573532L31.412 0.397061C32.0212 0.072188 32.7783 0.30263 33.1032 0.911767C33.4281 1.5209 33.1976 2.27807 32.5885 2.60294L32.2576 2.77941C31.0627 3.41667 29.7294 3.75 28.3752 3.75H27.9692C28.5841 4.09118 29.0002 4.747 29.0002 5.5C29.0002 6.60457 28.1048 7.5 27.0002 7.5C25.8957 7.5 25.0002 6.60457 25.0002 5.5C25.0002 4.747 25.4164 4.09118 26.0312 3.75H7.96925C8.5841 4.09118 9.00025 4.747 9.00025 5.5C9.00025 6.60457 8.10482 7.5 7.00025 7.5C5.89568 7.5 5.00025 6.60457 5.00025 5.5C5.00025 4.747 5.41639 4.09118 6.03124 3.75H5.62525C4.27109 3.75 2.93774 3.41667 1.74289 2.77941L1.41201 2.60294C0.802874 2.27807 0.572432 1.5209 0.897306 0.911767Z" />
                </svg>
            </div>
            <div class="line top"></div>
            <div class="line bottom"></div>
        </div>
    </div>

    <div id="keyboard">
        <button class="up">
            <svg viewBox="0 0 8 8">
                <path d="M3.99953 1C3.83653 1 3.68353 1.0795 3.59003 1.2135L0.0900328 6.2135C-0.0169672 6.366 -0.0289672 6.5655 0.0560328 6.731C0.142533 6.8965 0.313033 7 0.499533 7H7.50003C7.68653 7 7.85753 6.8965 7.94353 6.731C8.02853 6.5655 8.01653 6.366 7.90953 6.2135L4.40953 1.2135C4.31653 1.0795 4.16353 1 4.00053 1C4.00003 1 4.00003 1 3.99953 1C4.00003 1 4.00003 1 3.99953 1Z" />
            </svg>
        </button>
        <button class="left">
            <svg viewBox="0 0 8 8">
                <path d="M1 4.00053C1 4.16353 1.0795 4.31653 1.2135 4.41003L6.2135 7.91003C6.366 8.01703 6.5655 8.02903 6.731 7.94403C6.8965 7.85753 7 7.68703 7 7.50053V0.499533C7 0.313033 6.8965 0.142033 6.731 0.0560328C6.5655 -0.0289672 6.366 -0.0169672 6.2135 0.0900328L1.2135 3.59003C1.0795 3.68353 1 3.83653 1 3.99953C1 4.00003 1 4.00003 1 4.00053C1 4.00003 1 4.00003 1 4.00053Z" />
            </svg>
        </button>
        <button class="right">
            <svg viewBox="0 0 8 8">
                <path d="M7 3.99953C7 3.83653 6.9205 3.68353 6.7865 3.59003L1.7865 0.0900328C1.6345 -0.0169672 1.4345 -0.0289672 1.269 0.0560328C1.1035 0.142533 1 0.313033 1 0.499533V7.50003C1 7.68653 1.1035 7.85753 1.269 7.94353C1.4345 8.02853 1.634 8.01653 1.7865 7.90953L6.7865 4.40953C6.9205 4.31653 7 4.16353 7 4.00053C7 4.00003 7 4.00003 7 3.99953C7 4.00003 7 4.00003 7 3.99953Z" />
            </svg>
        </button>
        <button class="down">
            <svg viewBox="0 0 8 8">
                <path d="M4.00053 7C4.16353 7 4.31653 6.9205 4.41003 6.7865L7.91003 1.7865C8.01703 1.634 8.02903 1.4345 7.94403 1.269C7.85753 1.1035 7.68703 1 7.50053 1H0.499533C0.313033 1 0.142533 1.1035 0.0560328 1.269C-0.0289672 1.4345 -0.0169672 1.634 0.0900328 1.7865L3.59003 6.7865C3.68353 6.9205 3.83653 7 3.99953 7C4.00003 7 4.00003 7 4.00053 7C4.00003 7 4.00003 7 4.00053 7Z" />
            </svg>
        </button>
        <span class="hide">Please don't press <strong>C</strong></span>
    </div>

    <a class="link" href="https://check.so/" target="_blank"><svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M57.1286 32C57.1286 36.0179 56.8608 40.0357 56.459 43.5179C55.7893 50.3482 50.4768 55.6607 43.6911 56.3304C40.1643 56.7321 36.1465 57 32.1286 57C28.1108 57 24.0929 56.7321 20.6108 56.3304C13.7804 55.6607 8.51256 50.3482 7.79827 43.5179C7.39649 40.0357 7.12863 36.0179 7.12863 32C7.12863 27.9821 7.39649 23.9643 7.79827 20.4375C8.51256 13.6518 13.7804 8.33929 20.6108 7.66964C24.0929 7.26786 28.1108 7 32.1286 7C36.1465 7 40.1643 7.26786 43.6911 7.66964C47.363 8.032 50.6035 9.75383 52.9104 12.3329C44.3215 17.7863 36.9127 24.9293 31.1504 33.2947C28.9284 30.3478 26.4965 27.5686 23.8835 24.9786C22.6451 23.7511 20.646 23.76 19.4185 24.9984C18.191 26.2369 18.1998 28.2359 19.4383 29.4635C22.8748 32.8697 25.9661 36.6281 28.6359 40.6779C29.2334 41.5842 30.2546 42.12 31.3399 42.0966C32.4252 42.0732 33.4224 41.4939 33.9803 40.5627C39.4638 31.4101 47.0078 23.6326 55.9692 17.872C56.2063 18.6976 56.3719 19.5551 56.459 20.4375C56.8608 23.9643 57.1286 27.9821 57.1286 32ZM52.9104 12.3329C54.8687 11.0895 56.8883 9.93399 58.9638 8.87182C60.516 8.07741 62.4183 8.69175 63.2128 10.244C64.0072 11.7962 63.3928 13.6986 61.8406 14.493C59.8241 15.525 57.8649 16.6534 55.9692 17.872C55.3695 15.7842 54.3124 13.9002 52.9104 12.3329Z" fill="#F9A28E" />
        </svg></a>
</body>
<script>
    const {
        to,
        set
    } = gsap;

    document.querySelectorAll('.loading').forEach(loading => {
        loading.count = 0
        let lines = to(loading, {
            keyframes: [{
                '--line-top-x': '-100%',
                '--line-bottom-x': '-200%',
                onComplete() {
                    set(loading, {
                        '--line-top-x': '200%',
                        '--line-bottom-x': '100%',
                    })
                }
            }, {
                '--line-top-x': '0%',
                '--line-bottom-x': '0%'
            }],
            duration: 1,
            repeat: -1
        })

        const keyboard = document.querySelector('#keyboard')
        const arrowUp = keyboard.querySelector('.up')
        const arrowLeft = keyboard.querySelector('.left')
        const arrowRight = keyboard.querySelector('.right')
        const arrowDown = keyboard.querySelector('.down')
        const spanHidden = keyboard.querySelector('span')

        document.body.onkeyup = e => {
            if (e.keyCode == 32 || e.keyCode == 38) {
                jump(loading, lines)
                arrowUp.classList.add('pressed')
                setTimeout(() => arrowUp.classList.remove('pressed'), 400)
            }
            if (e.keyCode == 40 || e.keyCode == 39 || e.keyCode == 37) {
                if (!loading.ouch) {
                    reset(loading, lines)
                }
                keyboard.querySelector('.pressed').classList.remove('pressed')
            }
            if (loading.ouch && (e.keyCode == 32 || e.keyCode == 38)) {
                loading.ouch = false
                reset(loading, lines)
            }
        }

        document.body.onkeydown = e => {
            if (e.keyCode == 39) {
                fast(loading, lines)
                arrowRight.classList.add('pressed')
            }
            if (e.keyCode == 40) {
                down(loading, lines)
                arrowDown.classList.add('pressed')
            }
            if (e.keyCode == 37) {
                slow(loading, lines)
                arrowLeft.classList.add('pressed')
            }
            if (e.keyCode == 67) {
                fall(loading, lines)
                spanHidden.classList.add('pressed')
                setTimeout(() => spanHidden.classList.remove('pressed'), 400)
            }
        }

        if (('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0)) {
            spanHidden.innerHTML = "Please don't click here"
        }

        arrowUp.addEventListener('click', e => {
            if (loading.ouch) {
                loading.ouch = false
                reset(loading, lines)
            }
            jump(loading, lines)
        })
        arrowLeft.addEventListener('pointerdown', e => slow(loading, lines))
        arrowRight.addEventListener('pointerdown', e => fast(loading, lines))
        arrowDown.addEventListener('pointerdown', e => down(loading, lines))
        spanHidden.addEventListener('click', e => fall(loading, lines))

        arrowLeft.addEventListener('pointerup', e => !loading.ouch && reset(loading, lines))
        arrowRight.addEventListener('pointerup', e => !loading.ouch && reset(loading, lines))
        arrowDown.addEventListener('pointerup', e => !loading.ouch && reset(loading, lines))
    })

    const jump = (loading, lines) => {
        if (loading.active) {
            return
        }
        loading.active = true
        loading.count += 1
        if (loading.count > 3) {
            document.querySelector('#keyboard span').classList.remove('hide')
        }
        lines.timeScale(2)
        to(loading, {
            keyframes: [{
                '--skate-x': '-12px',
                duration: .3
            }, {
                '--skate-x': '12px',
                duration: .5
            }, {
                '--skate-x': '0px',
                duration: .5
            }]
        })
        to(loading, {
            keyframes: [{
                '--skate-y': '-32px',
                duration: .4,
                delay: .2
            }, {
                '--skate-y': '0px',
                duration: .2
            }]
        })
        to(loading, {
            keyframes: [{
                duration: .2,
                delay: .2,
                '--arm-front': '40deg',
                '--arm-front-end': '-12deg',
                '--arm-back': '172deg',
                '--arm-back-end': '38deg',
                '--leg-front': '-8deg',
                '--leg-front-end': '102deg',
                '--leg-back': '103deg',
                '--leg-back-end': '-16deg',
                '--board-r': '-40deg',
                '--body-r': '7deg',
                '--body-y': '-90%',
                '--body-x': '-160%',
            }, {
                duration: .2,
                '--arm-front': '24deg',
                '--arm-front-end': '-48deg',
                '--arm-back': '172deg',
                '--arm-back-end': '15deg',
                '--leg-front': '22deg',
                '--leg-front-end': '55deg',
                '--leg-back': '142deg',
                '--leg-back-end': '-58deg',
                '--board-r': '3deg',
                '--body-r': '12deg',
                '--body-y': '-56%',
                '--body-x': '-60%',
            }, {
                duration: .2,
                '--arm-front': '24deg',
                '--arm-front-end': '-48deg',
                '--arm-back': '164deg',
                '--arm-back-end': '-36deg',
                '--leg-front': '-4deg',
                '--leg-front-end': '66deg',
                '--leg-back': '111deg',
                '--leg-back-end': '-36deg',
                '--board-r': '0deg',
                '--body-r': '34deg',
                '--body-y': '-53%',
                '--body-x': '-28%',
            }, {
                '--arm-front': '24deg',
                '--arm-front-end': '-48deg',
                '--arm-back': '164deg',
                '--arm-back-end': '-50deg',
                '--leg-front': '40deg',
                '--leg-front-end': '30deg',
                '--leg-back': '120deg',
                '--leg-back-end': '-36deg',
                '--board-r': '0deg',
                '--body-r': '12deg',
                '--body-y': '-65%',
                '--body-x': '-85%',
                duration: .4,
                onComplete() {
                    loading.active = false
                    lines.timeScale(1)
                }
            }]
        })
    }

    const fast = (loading, lines) => {
        if (loading.active) {
            return
        }
        loading.active = true
        loading.count += 1
        if (loading.count > 3) {
            document.querySelector('#keyboard span').classList.remove('hide')
        }
        lines.timeScale(2.5)
        to(loading, {
            '--skate-x': '12px',
            duration: .3
        })
        to(loading, {
            duration: .2,
            '--arm-front': '24deg',
            '--arm-front-end': '-48deg',
            '--arm-back': '164deg',
            '--arm-back-end': '-36deg',
            '--leg-front': '-4deg',
            '--leg-front-end': '66deg',
            '--leg-back': '111deg',
            '--leg-back-end': '-36deg',
            '--board-r': '0deg',
            '--body-r': '34deg',
            '--body-y': '-53%',
            '--body-x': '-28%',
        })
    }

    const reset = (loading, lines) => {
        if (!loading.active) {
            return
        }
        to(loading, {
            '--skate-x': '0px',
            duration: .3
        })
        to(loading, {
            duration: .2,
            '--arm-front': '24deg',
            '--arm-front-end': '-48deg',
            '--arm-back': '164deg',
            '--arm-back-end': '-50deg',
            '--leg-front': '40deg',
            '--leg-front-end': '30deg',
            '--leg-back': '120deg',
            '--leg-back-end': '-36deg',
            '--board-r': '0deg',
            '--board-x': '0px',
            '--body-r': '12deg',
            '--body-y': '-65%',
            '--body-x': '-85%',
            onComplete() {
                loading.active = false
                lines.play()
                lines.timeScale(1)
            }
        })
    }

    const slow = (loading, lines) => {
        if (loading.active) {
            return
        }
        loading.active = true
        loading.count += 1
        if (loading.count > 3) {
            document.querySelector('#keyboard span').classList.remove('hide')
        }
        lines.timeScale(.5)
        to(loading, {
            '--skate-x': '-12px',
            duration: .3
        })
        to(loading, {
            duration: .2,
            '--arm-front': '32deg',
            '--arm-front-end': '20deg',
            '--arm-back': '156deg',
            '--arm-back-end': '-22deg',
            '--leg-front': '19deg',
            '--leg-front-end': '74deg',
            '--leg-back': '134deg',
            '--leg-back-end': '-29deg',
            '--board-r': '-15deg',
            '--body-r': '-8deg',
            '--body-y': '-65%',
            '--body-x': '-110%',
        })
    }

    const down = (loading, lines) => {
        if (loading.active) {
            return
        }
        loading.active = true
        loading.count += 1
        if (loading.count > 3) {
            document.querySelector('#keyboard span').classList.remove('hide')
        }
        to(loading, {
            duration: .2,
            '--arm-front': '-26deg',
            '--arm-front-end': '-58deg',
            '--arm-back': '204deg',
            '--arm-back-end': '60deg',
            '--leg-front': '40deg',
            '--leg-front-end': '80deg',
            '--leg-back': '150deg',
            '--leg-back-end': '-96deg',
            '--body-r': '180deg',
            '--body-y': '-100%',
        })
    }

    const fall = (loading, lines) => {
        if (loading.active) {
            return
        }
        loading.active = true
        loading.ouch = true
        lines.pause()
        to(loading, {
            duration: .5,
            '--board-x': '60px'
        })
        to(loading, {
            keyframes: [{
                '--board-r': '-40deg',
                duration: .15
            }, {
                '--board-r': '0deg',
                duration: .3
            }]
        })
        to(loading, {
            keyframes: [{
                '--line-top-x': '-100%',
                '--line-bottom-x': '-200%',
                '--body-r': '-8deg',
                '--leg-back-end': '24deg',
                '--leg-back': '60deg',
                '--leg-front-end': '30deg',
                '--leg-front': '10deg',
                '--arm-back-end': '-40deg',
                '--arm-back': '54deg',
                '--arm-front-end': '-28deg',
                '--arm-front': '24deg',
                duration: .2
            }, {
                '--body-x': '-85%',
                '--body-y': '36%',
                '--body-r': '-26deg',
                '--leg-back-end': '24deg',
                '--leg-back': '20deg',
                '--leg-front-end': '30deg',
                '--leg-front': '-10deg',
                '--arm-back-end': '-40deg',
                '--arm-back': '164deg',
                '--arm-front-end': '-28deg',
                '--arm-front': '24deg',
                duration: .2
            }]
        })
    }
</script>

<!-- <h1>Anda akan dialihkan ke halaman selanjutnya dalam 3 menit</h1> -->