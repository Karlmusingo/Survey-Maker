$(document).ready(function() {
  var i = 1;
  var j = 1;
  $("#add").click(function() {
    i++;

    $("#addA").append(
      `<div class="input-group" id="answer${i}">\n\
                                    <label class="sr-only">answer${i} </label>\n\
                                    <input type="text" name="answer[]" placeholder="Enter answer" class="form-control name_list" />\n\
                                    <span type="button" name="remove" id="${i}" class="input-group-addon btn btn-danger btn_remove">&times;</span>\n\
                            </div>`
    );
  });
  $(document).on("click", ".btn_remove", function() {
    var button_id = $(this).attr("id");
    $("#answer" + button_id + "").remove();
  });

  $("#section_btn").click(function() {
    j++;
    var section = $("#section1").html();

    section = `<div id="section${j}"> ${section} </div>`;
    console.log(section);
    $("#addS").append(section);
  });

  $(document).on("click", ".btn_remove_section", function() {
    if ($(".btn_remove_section").length > 1) {
      var section_id = $(this)
        .parent()
        .parent()
        .attr("id");
      if (section_id != "section1") {
        $("#" + section_id + "").remove();
      }
    }
  });
  /*
    $(document).on('change', '#section_title', function () {

        if ($(this).val() === '') {
            console.log(1);
            $.ajax({
                url: "section.php?section=" + $(this).val(),
                success: function (data)
                {
                    console.log(data);
                }
            });
        } else {
            console.log(2);
            $.ajax({
                url: "section.php?section=" + $(this).val(),
                method: "GET",
                //data: $(this).serialize(),
                success: function (data)
                {
                    console.log(data);
                }
            });
        }
    });
*/
  $("#submit").click(function(event) {
    event.preventDefault();
    $.ajax({
      url: "question.php",
      method: "POST",
      data: $("#form").serialize(),
      success: function(data) {
        var resp = $.parseJSON(data);
        $("#alert")
          .text(resp)
          .fadeOut(2000);
        $("#form")[0].reset();
      }
    });
  });
  $("#submit").click(function() {
    $.ajax({
      type: "GET",
      url: "receiver.php",
      data: $("#form").serialize(),
      success: function(data) {
        var obj = $.parseJSON(data);
        var i = 0;
        var j = 0;

        var result =
          "<table class='table table-bordered table-responsive text'><tr></tr>";
        $.each(obj, function() {
          i++;
          $this = this;
          result =
            result +
            "<tr> <td> " +
            i +
            " </td><td>" +
            $this.question +
            "</td><td>";
          var rep =
            "<table class='table table-bordered table-responsive text-left'>";
          for (var id in $this.reponses) {
            j++;
            rep =
              rep +
              "<tr><td>" +
              j +
              "</td><td>" +
              $this.reponses[id].valeur +
              "</td></tr>";
          }
          rep = rep + "</table></td></tr>";
          result = result + rep;
        });
        result = result + "</table>";
        $("#section" + $this.section_id).html(result);
        console.log(obj);
      }
    });
  });
  $("#dismiss").click(function() {
    $.ajax({
      type: "GET",
      url: "receiver.php",
      data: $("#form").serialize(),
      success: function(data) {
        var obj = $.parseJSON(data);
        var i = 0;
        var j = 0;

        var result = "<table class='table table-responsive text'><tr></tr>";
        $.each(obj, function() {
          i++;
          $this = this;
          result =
            result +
            "<tr> <td> " +
            i +
            " </td><td>" +
            $this.question +
            "</td><td>";
          var rep =
            "<table class='table jumbottron table-responsive text-left'>";
          for (var id in $this.reponses) {
            j++;
            rep =
              rep +
              "<tr><td>" +
              j +
              "</td><td>" +
              $this.reponses[id].valeur +
              "</td></tr>";
          }
          j = 0;
          rep = rep + "</table></td></tr>";
          result = result + rep;
        });
        result = result + "</table>";
        $("#section" + $this.section_id).html(result);
        console.log(obj);
      }
    });
  });
  // à revoir, la suppression des inputs lors que le type de reponse est text et les reajoutés lorsque on revient
  // au type selection unique ou selection multiple
  var $select = $("#remove").html();
  $("#select").change(function() {
    console.log($select);
    if ($(this).val() === "text" || $(this).val() === "number") {
      $("#remove").addClass("hidden");
    }
    if ($(this).val() === "radio" || $(this).val() === "checkbox") {
      $("#remove").removeClass("hidden");
    }
  });

  $("button[data-toggle=modal]").click(function() {
    idSection = $(this).attr("id");
    $("#sr-only").html(
      '<input type="text" name="idSection" value="' + idSection + '"/>'
    );
  });

  $("#parametre").click(function() {
    if ($("#parametre").prop("checked")) {
      $("#select_parametre").removeClass("hidden");

      $.ajax({
        url: "receiver.php?sondage_id=" + $("body").attr("id"),
        //            data: $('#form').serialize(),
        success: function(data) {
          var reponses = $.parseJSON(data);
          console.log(reponses);
          var optionAppend = "";
          $.each(reponses, function() {
            optionAppend =
              optionAppend +
              "<option value=" +
              this.id_question +
              ">" +
              this.question +
              "</option>";
          });
          $("select[name=param_question]").html(optionAppend);
        }
      });
    } else {
      $("#select_parametre").addClass("hidden");
    }
  });

  $("select[name=param_question]").change(function() {
    $.ajax({
      url: "receiver.php?selected_id=" + $("select[name=param_question]").val(),
      //            data: $('#form').serialize(),
      success: function(data) {
        var reponses = $.parseJSON(data);
        console.log(reponses);
        var optionAppend = "";
        $.each(reponses, function() {
          optionAppend =
            optionAppend +
            "<option value=" +
            this.id_reponse_proposee +
            ">" +
            this.valeur +
            "</option>";
        });
        $("select[name=param_reponse]").html(optionAppend);
      }
    });
  });

  $("input").click(function() {
    var reponse_id_clicked = $(this).attr("id");
    var question_id_clicked = $(this)
      .parent()
      .parent()
      .attr("id");
    var class_hidden = question_id_clicked + reponse_id_clicked;

    if (true) {
      var le = $('[class^="' + question_id_clicked + '"]').length;
      console.log(le);
    }

    $("." + class_hidden).removeClass("hidden");
  });
});
