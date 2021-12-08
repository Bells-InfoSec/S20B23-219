<html>
<head>
	<title>IEEE conference</title>
	<link href="style.css" type="text/css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      width: 90%;
      margin: 2em auto;
      font: 1em/1.3 Arial, Helvetica, sans-serif;
    }

    a:link,
    a:visited {
      color: #333;
    }

    nav ul,
    aside ul {
      list-style: none;
      padding: 0;
    }

    nav a:link,
    nav a:visited {
      background-color: rgba(207, 232, 220, 0.2);
      border: 2px solid rgb(79, 185, 227);
      text-decoration: none;
      display: block;
      padding: 10px;
      color: #333;
      font-weight: bold;
    }

    nav a:hover {
      background-color: rgba(207, 232, 220, 0.7);
    }

    .related {
      background-color: rgba(79, 185, 227, 0.3);
      border: 1px solid rgb(79, 185, 227);
      padding: 10px;
    }

    .sidebar {
      background-color: rgba(207, 232, 220, 0.5);
      padding: 10px;
    }

    article {
      margin-bottom: 1em;
    }

    .grid {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }

    .grid li {
      border: 1px solid #666;
      padding: 10px;
    }

    @media screen and (min-width: 40em) {
      article {
        display: grid;
        grid-template-columns: 3fr 1fr;
        column-gap: 20px;
      }

      nav ul {
        display: flex;
      }

      nav li {
        flex: 1;
      }
    }

    @media screen and (min-width: 70em) {
      main {
        display: grid;
        grid-template-columns: 3fr 1fr;
        column-gap: 20px;
      }

      article {
        margin-bottom: 0;
      }

      footer {
        border-top: 1px solid #ccc;
        margin-top: 2em;
      }
    }
  </style>


</head>
<body>

	<div class="top">
		<div>
		 Contact:+256 312 350 800 /880. Email us: info@ucu.ac.ug
		</div>
	</div>

	<div class="logo" >
		<div>
			<table>
				<tr>

					<td> <br> <br>
						<font size="4px">
							<a href="home.php">HOME</a>
							<a href="registration.php">REGISTER</a>
							<a href="speakers.php">SPEAKERS</a>
							<a href="contact.php">CONTACT US</a>
							<a href="admin.php">ADMIN</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>



      <div class="wrapper">
        <header>
          <nav>
            <ul>

              <li style="text-align: center;"><a href="Display.php"> EDIT CONTENT</a></li>
              <li style="text-align: center;"><a href="count.php">TIME REMAINING</a></li>
              <li style="text-align: center;"><a href="select1.php">VIEW MESSAGES</a></li>
              <li style="text-align: center;"><a href="select.php">USERS</a></li>
            </ul>
          </nav>
        </header>
        <main>
          <article>
            <div class="content">
              <h1>ABOUT</h1>
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['STUDENT',     11],
          ['ASSOCIATE',      2],
          ['MEMBER',  2],
          ['FELLOW', 2],
          ['GRADUATE',    7]
        ]);

        var options = {
          title: 'A basic  graph showing the number of registered users in each grades of membership with IEEE'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>


              <ul class="grid">
                <li>
                  <h2><a href="CAL.PHP">CALENDER</a></h2>
                  <p>

                  </p>
                </li>
                <li>
                  <h2>Card 2</h2>
                  <p>

                  </p>
                </li>
                <li>
                  <h2>Card 3</h2>
                  <p>
                  </p>
                </li>


              </ul>
            </div>
            <aside class="related">
              <p>
              IEEE is a leader in engineering and technology education, providing resources for pre-university, university, and continuing professional education.
              </p>
            </aside>
          </article>

          <aside class="sidebar">
            <h2>External  IEEE based links</h2>
            <ul>
              <li>
                <a
                  href="https://www.ieee.org/membership/join/index.html"
                  >JOIN THE COMMUNITY</a
                >
              </li>
              <li>
                <a href="https://www.ieee.org/membership/join/index.html#qualifications"
                  >qualifications</a
                >
              </li>
              <li>
                <a
                  href="https://ieee-collabratec.ieee.org"
                  >COLLABRATEC</a
                >
              </li>
            </ul>
          </aside>
        </main>

        <footer><p>&copy;Advancing Technology for Humanity</p></footer>
      </div>
    </body>
  </html>








	<div class="nav_down">
		<div>
		 &copy;UGANDA CHRISTIAN UNIVERSITY , site designed & developed by KATUMBIRE BOB BELLS
		</div>
	</div>
