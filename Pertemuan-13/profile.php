<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }


        .profile-container {
            width: 100%;
            max-width: 360px;
            padding: 20px;
        }

        .profile-card {
            background: #e3dedeff;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid #4facfe;
            margin-bottom: 15px;
        }

        .profile-info {
            margin-top: 15px;
        }

        .profile-info p {
            margin: 6px 0;
            color: #444;
        }

        .glitch {
            position: relative;
            display: inline-block;
            color: #000000ff;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            animation: glitchMain 2.5s infinite;
            text-align: center;
        }


        .glitch::before {
            content: attr(data-text);
            position: absolute;
            inset: 0;
            color: #ff004c;
            overflow: hidden;
            text-align: center;
            animation: glitchRed 2s infinite;
        }


        .glitch::after {
            content: attr(data-text);
            position: absolute;
            inset: 0;
            color: #00eaff;
            overflow: hidden;
            text-align: center;
            animation: glitchBlue 1.8s infinite;
        }


        @keyframes glitchMain {
            0% {
                transform: none;
            }

            20% {
                transform: skew(-2deg);
            }

            40% {
                transform: skew(2deg);
            }

            60% {
                transform: skew(-1deg);
            }

            100% {
                transform: none;
            }
        }

        @keyframes glitchRed {
            0% {
                clip-path: inset(0 0 80% 0);
            }

            20% {
                clip-path: inset(10% 0 60% 0);
            }

            40% {
                clip-path: inset(40% 0 30% 0);
            }

            60% {
                clip-path: inset(60% 0 10% 0);
            }

            100% {
                clip-path: inset(0 0 80% 0);
            }
        }

        @keyframes glitchBlue {
            0% {
                clip-path: inset(80% 0 0 0);
            }

            20% {
                clip-path: inset(60% 0 10% 0);
            }

            40% {
                clip-path: inset(30% 0 40% 0);
            }

            60% {
                clip-path: inset(10% 0 60% 0);
            }

            100% {
                clip-path: inset(80% 0 0 0);
            }
        }

        .action {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 8px;
            background-color: #1a73e8;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-shadow: 0px 5px 15px rgba(21, 58, 131, 0.3);
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0px 8px 20px rgba(46, 212, 241, 0.4);
        }
    </style>
</head>

<body>

    <video autoplay muted loop id="background-video">
        <source src="Video Project 1.mp4" type="video/mp4">
    </video>

    <div class="profile-container">
        <div class="profile-card">

            <img src="image copy 2.png" alt="Foto Profile" class="profile-img">

            <h2 class="glitch" data-text="Halo Nyaw >_<">Halo Nyaw >_< </h2>

                    <div class="profile-info">
                        <p><strong>Nama:</strong> Rafaa</p>
                        <p><strong>Email:</strong> rafaa@email.com</p>
                        <p><strong>Status:</strong> Aktif</p>
                    </div>

                    <div class="action">
                        <a href="index.php" class="btn">Beranda</a>
                        <button class="btn" onclick="playVideo('jawa saiba momoi.mp4')">Klik Aku</button>
                    </div>

        </div>
    </div>

    <audio id="sound" src="scream.mp3"></audio>

    <script>
        function playVideo(videoSrc) {
            const video = document.createElement('video');
            video.src = videoSrc;
            video.autoplay = true;
            video.style.position = 'fixed';
            video.style.top = '0';
            video.style.left = '0';
            video.style.width = '100%';
            video.style.height = '100%';
            video.style.objectFit = 'cover';
            video.style.zIndex = '9999';

            document.body.appendChild(video);

            const sound = document.getElementById('sound');
            sound.currentTime = 0;
            sound.play();

            video.onended = () => {
                video.remove();
                sound.pause();
            };
        }
    </script>

</body>

</html>