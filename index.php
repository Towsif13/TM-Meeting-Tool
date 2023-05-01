<?php
include 'dbh.php';
$results = mysqli_query($conn, "SELECT * FROM tm_meetings ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TM Meetiing Tracker</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="style.css">


  <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script defer src="script.js"></script>
</head>

<body>

  <!-- <div class="container">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Open</button>

    <div class="modal fade modal-xl" id="modal">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Enter Meeting Info</h2>
            <button class="btn-close" data-bs-dismiss="modal" data-bs-target="#modal"></button>
          </div>
          <div class="modal-body">lorem600</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->



  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->




  <div class="container head">
    <div class="row">
      <div class="col-auto">
        <h2>TM Meeting Tracker</h2>
      </div>

      <div class="col-auto">
        <!-- <a href="#" class="btn btn-outline-primary btn-md">Search</a> -->
        <div class="container">
          <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modal">Add New Meeting</button>

          <div class="modal fade modal-xl" id="modal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">

                <div class="modal-header">
                  <h2>Enter Meeting Info</h2>
                  <button class="btn-close" data-bs-dismiss="modal" data-bs-target="#modal"></button>
                </div>

                <div class="modal-body">

                  <div class="container">

                    <form id="meeting-form" action="" method="post">

                      <div class="container">

                        <div class="row">

                          <div class="col-4">
                            <label for="participants" class="form-label">Participants</label>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="NK" name="participants[]">
                              <label class="form-check-label" for="participants[]">
                                NK
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="ASM" name="participants[]">
                              <label class="form-check-label" for="participants[]">
                                ASM
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="AI" name="participants[]">
                              <label class="form-check-label" for="participants[]">
                                AI
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="SMM" name="participants[]">
                              <label class="form-check-label" for="participants[]">
                                SMM
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="TAC" name="participants[]">
                              <label class="form-check-label" for="participants[]">
                                TAC
                              </label>
                            </div>



                          </div>

                          <div class="col-4">
                            <label for="meeting-type" class="form-label">Meeting Type</label>
                            <select name="meeting-type" id="meeting-type" class="form-select">
                              <option value="DOI Meeting">DOI Meeting</option>
                              <option value="Team Meeting">Team Meeting</option>
                              <option value="Idea Discussion">Idea Discussion</option>
                              <option value="MDC Meeting">MDC Meeting</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>

                          <!-- INVENTORS -->
                          <div class="col-4">
                            <label for="inventors" class="form-label">Inventors</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="inventor-name-input" placeholder="Inventor Knox ID" aria-label="Inventor Knox ID" aria-describedby="add-inventor-button">
                              <button class="btn btn-outline-primary" type="button" id="add-inventor-button">Add</button>
                            </div>

                            <div class="inventor-list-section">
                              <div id="inventors">

                                <!-- <div class="input-group input-group-sm inventor">
                                  <input type="text" class="form-control inventor-name" value="towsif.alam" readonly>
                                  <button class="btn btn-outline-danger" type="button" class="delete-inventor-button" id="delete-inventor-button">Delete</button>
                                </div> -->

                              </div>
                            </div>


                          </div>

                        </div>

                        <div class="row">

                          <div class="col-4">

                            <label for="date" class="form-label">Date</label>
                            <div class="input-group">
                              <input type="date" name="date" class="form-control" required>
                            </div>
                          </div>

                          <div class="col-4">
                            <label for="room" class="form-label">Room</label>
                            <div class="input-group">
                              <span class="input-group-text" id="room">Room</span>
                              <input type="number" name="room" class="form-control" placeholder="Enter Room Number" aria-label="Room" aria-describedby="room" required>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-8">
                            <label for="doi" class="form-label">DOI/Idea</label>
                            <input type="text" class="form-control" name="doi" id="doi" placeholder="Enter DOI/Idea Title">
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-8">
                            <label for="remarks" class="form-label">Remarks</label>
                            <textarea class="form-control" name="remarks" placeholder="Enter Text Here" id="remarks" rows="5"></textarea>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col">
                            <!-- <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                            <button type="submit" name="submit" class="btn btn-primary float-right">Add Meeting Info</button>

                          </div>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- STATS MODAL -->
      <!-- stats js -->
      <script>
        function showstats(button) {
          var total_meeting_text = document.getElementById("total_meeting_text");
          var total_doi_meeting_text = document.getElementById("total_doi_meeting_text");
          var total_idea_meeting_text = document.getElementById("total_idea_meeting_text");
          var total_mdc_meeting_text = document.getElementById("total_mdc_meeting_text");
          var total_team_meeting_text = document.getElementById("total_team_meeting_text");
          var total_other_meeting_text = document.getElementById("total_other_meeting_text");
          switch (button) {
            case 'all':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings) AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            case 'TAC':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%') AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%' AND meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%' AND meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%' AND meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%' AND meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%TAC%' AND meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings by TAC: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings by TAC: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions by TAC: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings by TAC: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings by TAC: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings by TAC: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            case 'SMM':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%') AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%' AND meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%' AND meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%' AND meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%' AND meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%SMM%' AND meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings by SMM: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings by SMM: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions by SMM: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings by SMM: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings by SMM: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings by SMM: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            case 'AI':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%') AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%' AND meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%' AND meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%' AND meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%' AND meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%AI%' AND meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings by AI: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings by AI: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions by AI: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings by AI: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings by AI: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings by AI: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            case 'ASM':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%') AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%' AND meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%' AND meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%' AND meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%' AND meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%ASM%' AND meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings by ASM: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings by ASM: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions by ASM: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings by ASM: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings by ASM: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings by ASM: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            case 'NK':
              <?php
              $sql = "SELECT 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%') AS total_meeting, 
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%' AND meeting_type='DOI Meeting') AS doi_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%' AND meeting_type='MDC Meeting') AS mdc_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%' AND meeting_type='Idea Discussion') AS idea_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%' AND meeting_type='Team Meeting') AS team_meetings,
              (SELECT COUNT(*) FROM tm_meetings WHERE participants LIKE '%NK%' AND meeting_type='Other') AS other_meetings";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_meeting_jsonString = json_encode($row["total_meeting"]);
              $total_doi_meeting_jsonString = json_encode($row["doi_meetings"]);
              $total_idea_meeting_jsonString = json_encode($row["idea_meetings"]);
              $total_mdc_meeting_jsonString = json_encode($row["mdc_meetings"]);
              $total_team_meeting_jsonString = json_encode($row["team_meetings"]);
              $total_other_meeting_jsonString = json_encode($row["other_meetings"]);
              ?>
              total_meeting_text.innerHTML = "Total Meetings by NK: " + JSON.parse('<?php echo $total_meeting_jsonString; ?>');
              total_doi_meeting_text.innerHTML = "Total DOI Meetings by NK: " + JSON.parse('<?php echo $total_doi_meeting_jsonString; ?>');
              total_idea_meeting_text.innerHTML = "Total Idea Discussions by NK: " + JSON.parse('<?php echo $total_idea_meeting_jsonString; ?>');
              total_mdc_meeting_text.innerHTML = "Total MDC Meetings by NK: " + JSON.parse('<?php echo $total_mdc_meeting_jsonString; ?>');
              total_team_meeting_text.innerHTML = "Total Team Meetings by NK: " + JSON.parse('<?php echo $total_team_meeting_jsonString; ?>');
              total_other_meeting_text.innerHTML = "Total Other Meetings by NK: " + JSON.parse('<?php echo $total_other_meeting_jsonString; ?>');
              break;
            default:
              text.innerHTML = "";
          }
        }
      </script>

      <div class="col-auto">
        <div class="container">

          <!-- Button trigger modal -->
          <button class="btn btn-outline-primary button-md" data-bs-toggle="modal" data-bs-target="#stats-modal">
            Statistics
          </button>

          <!-- Modal -->
          <div class="modal fade modal-xl" id="stats-modal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">

                <div class="modal-header">
                  <h2>Meeting Statistics</h2>
                  <button class="btn-close" data-bs-dismiss="modal" data-bs-target="#stats-modal"></button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row justify-content-start">
                      <div class="col-auto">
                        <span class="align-middle">
                          <text>Select TM Member</text>
                        </span>

                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" id="all-btn" onclick="showstats('all')">All</button>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" onclick="showstats('NK')">NK</button>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" onclick="showstats('ASM')">ASM</button>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" onclick="showstats('AI')">AI</button>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" onclick="showstats('SMM')">SMM</button>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary btn-sm" onclick="showstats('TAC')">TAC</button>
                      </div>
                    </div>

                    <div class="row">

                      <!-- #TODO -->
                      <div class="container stats-container">
                        <span>
                          <p id="total_meeting_text"></p>
                        </span>
                        <span>
                          <p id="total_doi_meeting_text"></p>
                        </span>
                        <span>
                          <p id="total_idea_meeting_text"></p>
                        </span>
                        <span>
                          <p id="total_mdc_meeting_text"></p>
                        </span>
                        <span>
                          <p id="total_team_meeting_text"></p>
                        </span>
                        <span>
                          <p id="total_other_meeting_text"></p>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <hr>

    <!-- SEARCH BY ROW -->
    <!-- <div class="container">
      <div class="row justify-content-start">
        <div class="col-auto">
          <span class="align-middle">
            <text>Search By</text>
          </span>

        </div>
        <div class="col-auto">
          <button class="btn btn-outline-primary btn-sm">Participants</button>
        </div>
        <div class="col-auto">
          <button class="btn btn-outline-primary btn-sm">Date</button>
        </div>
        <div class="col-auto">
          <button class="btn btn-outline-primary btn-sm">Type</button>
        </div>
      </div>

    </div> -->

  </div>

  <div class="container table-content">

    <table id="meetings" class="table table-striped">
      <thead class="table-primary">
        <tr>
          <th>Participants</th>
          <th>Meeting Type</th>
          <th>Date</th>
          <th>Room</th>
          <th>DOI/Idea</th>
          <th>Inventors</th>
          <th>Remarks</th>
        </tr>
      </thead>

      <tbody>
        <?php
        while ($row = mysqli_fetch_array($results)) { ?>
          <tr>
            <td class="align-middle">
              <?php echo nl2br($row['participants']); ?>
            </td>
            <td class="align-middle">
              <?php echo $row['meeting_type']; ?>
            </td>
            <td class="align-middle">
              <?php echo $row['date']; ?>
            </td>
            <td class="align-middle">
              <?php echo $row['room']; ?>
            </td>
            <td class="align-middle">
              <?php echo $row['doi']; ?>
            </td>
            <td class="align-middle">
              <?php echo $row['inventors']; ?>
            </td>
            <td class="align-middle">
              <?php echo $row['remarks']; ?>
            </td>
          </tr>
        <?php } ?>

      </tbody>



    </table>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>




<?php

if (isset($_POST["submit"])) {
  include 'dbh.php';

  // PARTICIPANTS
  if (!empty($_POST["participants"])) {
    $participants = implode("\n", $_POST["participants"]);
  }

  // MEETING TYPE
  $meeting_type = $_POST["meeting-type"];

  // ROOM
  $room = $_POST["room"];

  // DATE
  $date = $_POST["date"];

  // DOI
  if (!empty($_POST["doi"])) {
    $doi = $_POST["doi"];
  } else {
    $doi = 'No DOI/Idea';
  }


  // REMARKS
  if (!empty($_POST["remarks"])) {
    $remarks = $_POST["remarks"];
  } else {
    $remarks = 'No Remarks';
  }

  $inventors = 'No Inventors';


  $sql = "INSERT INTO tm_meetings VALUES('','$participants', '$meeting_type', '$date', '$room', '$doi', '$remarks', '$inventors')";
  mysqli_query($conn, $sql);

  echo "<meta http-equiv='refresh' content='0'>";
}
?>