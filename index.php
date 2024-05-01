<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subject</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="form-out">
      <div class="form-bg">
        <form action="submit_action.php" method="post" class="form">
          <div class="form-group">
            <label for="computer_sys_admin" class="label"
              >Computer System Administration :</label
            >
            <input
              class="input"
              type="number"
              name="computer_sys_admin"
              id="computer_sys_admin"
            />
          </div>
          <div class="form-group">
            <label for="data_structure_algorithms" class="label"
              >Data Structures and Algorithms :</label
            >
            <input
              class="input"
              type="number"
              name="data_structure_algorithms"
              id="data_structure_algorithms"
            />
          </div>
          <div class="form-group">
            <label for="dbms" class="label">DBMS :</label>
            <input class="input" type="number" name="dbms" id="dbms" />
          </div>
          <div class="form-group">
            <label for="personal_app_dev" class="label"
              >Personal Application Development :</label
            >
            <input
              class="input"
              type="number"
              name="personal_app_dev"
              id="personal_app_dev"
            />
          </div>
          <div class="form-group">
            <label for="web_app_dev" class="label"
              >Web Application Development :</label
            >
            <input
              class="input"
              type="number"
              name="web_app_dev"
              id="web_app_dev"
            />
          </div>
          <input
            type="submit"
            value="Submit"
            name="submit"
            class="btn-submit"
          />
        </form>
      </div>
    </div>
  </body>
</html>
