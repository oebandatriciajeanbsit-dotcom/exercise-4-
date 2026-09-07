<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Group 2 Profile</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            color: #E0E0E0;
            font-family: Arial, sans-serif;

            max-width: 1200px;
            margin: auto;
            padding: 20px;

            background-image: url("background.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            min-height: 100vh;
        }

        /* =========================
           TOP NAVIGATION
        ========================= */

        .top-nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;

            gap: 12px;

            margin-bottom: 35px;
        }

        .nav-btn {
            padding: 11px 25px;

            border-radius: 6px;

            font-size: 14px;
            font-weight: bold;

            text-decoration: none;

            transition: 0.3s;

            border: 1px solid #447cc0;
        }

        .login-btn {
            color: #ffffff;
            background: rgba(15, 30, 59, 0.85);
        }

        .login-btn:hover {
            background: #447cc0;
            box-shadow: 0 0 15px rgba(68, 124, 192, 0.6);
        }

        .register-btn {
            color: white;
            background: #447cc0;
        }

        .register-btn:hover {
            background: #3569a5;
            box-shadow: 0 0 15px rgba(68, 124, 192, 0.8);
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            text-align: center;

            margin-bottom: 50px;

            padding: 35px 20px;

            background: rgba(10, 23, 46, 0.85);

            border: 1px solid #1A335C;

            border-radius: 15px;

            box-shadow:
                0 0 30px rgba(0, 80, 180, 0.25);
        }

        .header h1 {
            color: #eff2f5;

            font-size: 48px;

            letter-spacing: 4px;

            margin-bottom: 12px;

            text-shadow:
                0 0 10px rgba(68, 124, 192, 0.7);
        }

        .header p {
            color: #66b3ff;

            font-size: 17px;

            letter-spacing: 1px;
        }


        /* =========================
           SECTION TITLE
        ========================= */

        h2 {
            color: #447cc0;

            font-size: 25px;

            margin-bottom: 25px;

            text-align: center;

            letter-spacing: 2px;
        }


        /* =========================
           TEAM LEADER
        ========================= */

        .leader {
            background: rgba(10, 23, 46, 0.92);

            padding: 30px;

            border-radius: 12px;

            margin-bottom: 45px;

            border: 1px solid #1A335C;

            box-shadow:
                0 0 25px rgba(0, 80, 180, 0.2);
        }

        .leader-content {
            display: flex;

            gap: 35px;

            align-items: center;
        }

        .leader-image {
            width: 160px;
            height: 160px;

            border-radius: 50%;

            object-fit: cover;

            border: 3px solid #447cc0;

            box-shadow:
                0 0 20px rgba(68, 124, 192, 0.5);
        }

        .leader-info {
            flex: 1;
        }

        .leader-info h3 {
            color: white;

            font-size: 28px;

            margin-bottom: 15px;
        }


        /* =========================
           CARDS
        ========================= */

        .grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .card {
            background: rgba(15, 30, 59, 0.92);

            border: 1px solid #1A335C;

            padding: 25px;

            border-radius: 10px;

            text-align: center;

            transition: 0.3s;

            box-shadow:
                0 5px 20px rgba(0, 0, 0, 0.25);
        }

        .card:hover {
            transform: translateY(-5px);

            border-color: #447cc0;

            box-shadow:
                0 0 25px rgba(68, 124, 192, 0.35);
        }

        .card img {
            width: 120px;
            height: 120px;

            border-radius: 50%;

            object-fit: cover;

            border: 2px solid #447cc0;

            margin-bottom: 10px;
        }

        .card h4 {
            color: white;

            font-size: 20px;

            margin: 12px 0;
        }

        p {
            line-height: 1.6;

            color: #D0D8E2;
        }

        strong {
            color: #66b3ff;
        }


        /* =========================
           GITHUB
        ========================= */

        .github {
            color: #66b3ff;

            text-decoration: none;

            word-break: break-word;

            transition: 0.3s;
        }

        .github:hover {
            color: white;

            text-decoration: underline;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .grid {
                grid-template-columns: 1fr 1fr;
            }

        }


        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .top-nav {
                justify-content: center;
            }

            .header h1 {
                font-size: 32px;
            }

            .leader-content {
                flex-direction: column;

                text-align: center;
            }

            .grid {
                grid-template-columns: 1fr;
            }

        }

    </style>
</head>


<body>


    <!-- =========================
         LOGIN / REGISTER BUTTONS
    ========================== -->

    <div class="top-nav">

        <a href="login.php"
           class="nav-btn login-btn">
            LOGIN
        </a>

        <a href="register.php"
           class="nav-btn register-btn">
            REGISTER
        </a>

    </div>


    <!-- =========================
         HEADER
    ========================== -->

    <div class="header">

        <h1>GROUP 2 PROFILE</h1>

        <p>
            Integrative Programming Activity
        </p>

    </div>


    <!-- =========================
         TEAM LEADER
    ========================== -->

    <div class="leader">

        <h2>TEAM LEADER</h2>

        <div class="leader-content">

            <img
                src="Asenas.jpg"
                alt="Shiella Mae B. Aseñas"
                class="leader-image"
            >

            <div class="leader-info">

                <h3>
                    Shiella Mae B. Aseñas
                </h3>

                <p>
                    <strong>Role:</strong>
                    Team Leader
                </p>

                <br>

                <p>
                    <strong>Bio:</strong>
                    I guide and support my team members
                    and organize tasks to lead my group
                    in delivering quality tasks.
                </p>

                <br>

                <p>

                    <strong>
                        Contact/Social (GitHub):
                    </strong>

                    <br>

                    <a
                        class="github"
                        href="https://github.com/asenasshiellamaebsit-a11y"
                        target="_blank"
                    >
                        GitHub Profile
                    </a>

                </p>

            </div>

        </div>

    </div>


    <!-- =========================
         TEAM MEMBERS
    ========================== -->

    <h2>
        TEAM MEMBERS
    </h2>


    <div class="grid">


        <!-- Janna -->

        <div class="card">

            <img
                src="Alcaria.jpg"
                alt="Janna Marie R. Alcaria"
            >

            <h4>
                Janna Marie R. Alcaria
            </h4>

            <p>
                <strong>Role:</strong>
                UI/UX Designer
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                Currently, I’m working on my studies
                to connect multiple applications and
                programs of computers. It's my aim this
                semester to acquire skills in basic
                coding fundamentals, teamwork tools,
                and databases.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/alcariajannamarie/INTPROG"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


        <!-- Kenneth -->

        <div class="card">

            <img
                src="Barba.jpg"
                alt="Jhon Kenneth A. Barba"
            >

            <h4>
                Jhon Kenneth A. Barba
            </h4>

            <p>
                <strong>Role:</strong>
                Researcher
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                I am passionate about learning and
                exploring different areas of technology.
                I enjoy discovering new software,
                improving my computer skills, and
                learning basic programming.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/Kennethbarba/Integrative-Programming-Technology"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


        <!-- Aaron -->

        <div class="card">

            <img
                src="Cachila.jpg"
                alt="Aaron James B. Cachila"
            >

            <h4>
                Aaron James B. Cachila
            </h4>

            <p>
                <strong>Role:</strong>
                Tester &amp; Debugger
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                I have basic skills in HTML and CSS
                for creating and styling webpages.
                I am eager to learn more so I can
                strengthen and improve my technical
                abilities.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/aaroncachila8-debug/INTPROG"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


        <!-- Justine -->

        <div class="card">

            <img
                src="Dela Torre.jpg"
                alt="Justine Dela Torre"
            >

            <h4>
                Justine Dela Torre
            </h4>

            <p>
                <strong>Role:</strong>
                Programmer / Coder
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                I am a dedicated and hardworking student
                who is always willing to learn new things
                and improve my skills. I enjoy working on
                school projects, learning about technology,
                and gaining new experiences.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/justinedelatorre26/INTPROG"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


        <!-- Tricia -->

        <div class="card">

            <img
                src="Oebanda.jpg"
                alt="Tricia Jean Oebanda"
            >

            <h4>
                Tricia Jean Oebanda
            </h4>

            <p>
                <strong>Role:</strong>
                Presenter
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                I am a responsible and adaptable team
                member. I enjoy learning new things,
                collaborating with my teammates, and
                I am always willing to help ensure that
                our tasks are completed efficiently.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/oebandatriciajeanbsit-dotcom"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


        <!-- Michelle -->

        <div class="card">

            <img
                src="Pagran.jpg"
                alt="Michelle Pagran"
            >

            <h4>
                Michelle Pagran
            </h4>

            <p>
                <strong>Role:</strong>
                File &amp; Resource Manager
            </p>

            <br>

            <p>
                <strong>Bio:</strong>
                I am a reliable and dedicated team member
                skilled in basic programming and file
                management. I use my programming knowledge
                to contribute effectively to our tasks.
            </p>

            <br>

            <p>

                <strong>GitHub:</strong>

                <br>

                <a
                    class="github"
                    href="https://github.com/michellepagran/Integrative-Programming-Technologies.git"
                    target="_blank"
                >
                    GitHub Profile
                </a>

            </p>

        </div>


    </div>


</body>

</html>
