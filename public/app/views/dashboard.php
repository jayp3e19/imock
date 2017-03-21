<script src="app/controllers/news.js"></script>
<style>  
  html, body{
    height:100%;
  }
</style>
<div class="col-md-12" style="margin-top: 10px;">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">              
      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
      <li><a href="#takeexam" data-toggle="tab">Take Exam</a></li>
      <li><a href="#takequiz" data-toggle="tab">Take Quiz</a></li>
      
      <li class="pull-right"><a href="#">Welcome Student (student@gmail.com)!</a></li>

      <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li>               -->
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="home">        
        <div class="row">
          <div class="col-md-7">
            <h3>
              News 
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </h3>
            <div class="news"></div>
          </div>
          <div class="col-md-5">
            <h3>
              Exams
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </h3>
            <div class="box">
              <div class="box-body exams"></div>
              <div class="box-footer clearfix pull-right exams-total"></div>
          </div>
          <!-- /.box -->
          </div>       
        </div>
      </div>
      <!-- start exam tab  -->
      <div class="tab-pane" id="takeexam">
        <?php require_once("exam-student.php"); ?>
      </div>
      <!-- end exam tab -->
      <!-- start quiz tab -->
      <div class="tab-pane" id="takequiz">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Quiz Information</h3>
                  <div class="box-tools pull-right">
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> -->
                  </div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Choose Subject</label>
                      <select class="form-control select2 chooseSubject1" style="width: 100%;">
                        <option selected="selected">Loading Subjects...</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Choose Topic</label>
                      <select class="form-control select2 chooseTopic" style="width: 100%;">Loading Topics...</select>
                    </div>
                  </div>
                </div>
                <div class="text-red">Note: <span class="text-gray">Please avoid refreshing this page once you started the quiz.</span></div>
              </div>
              <div class="box-footer">
                <div class="btn-group pull-right">
                  <button type="submit" class="btn bg-maroon btn-flat margin startquiz">Start Quiz</button>               
                  <!-- <button type="submit" class="btn bg-purple btn-flat margin chooseagain">Choose Again</button> -->
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-8">
            <div class="box quiz-sheet">
              <div class="box-header with-border">
                <h3 class="box-title subject-chosen">Subject Chosen</h3>
                <h5 class="box-title pull-right" id="quizScore">
                  Items you answered: 0
                </h5>
                </div>
                <div class="box-body">
                  <!-- <button type="submit" class="btn bg-green btn-flat startquiz">Press this button once you are ready!</button>  -->
                  
                  <div class="row">
                    <center>
                      <ul class="pagination pagination-sm no-margin" id="quiz-nav">
                      </ul>
                    </center>  
                  </div>
                  <table class="table" id="quiz-table">
                    <tr>
                      <!-- <th style="width:150px">Choose Answer</th> -->
                      <!-- <th style="padding-left:30px">Question: <span id="quiz-question-sequence">001</span></th> -->
                      <th>Question: <span id="quiz-question-sequence">001</span></th>
                    </tr>
                    <tr>
                      <!-- <td width="30%">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3">
                              <label id="quiz_handle_a">
                                <div id="quiz_select1_a" style="position: absolute;margin-left: 6.5px;margin-top:1px;">A</div>
                                <div id="quiz_select2_a" class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_a" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_a" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>                              
                            </div>
                            <div class="col-sm-3">
                              <label id="quiz_handle_b">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">B</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_b" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 100;">
                                  <ins id="quiz_select_b" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>   
                            </div>
                            <div class="col-sm-3">
                              <label id="quiz_handle_c">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">C</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_c" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_c" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>   
                            </div>
                            <div class="col-sm-3">
                              <label id="quiz_handle_d">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">D</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_d" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_d" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>   
                            </div>
                          </div>
                        </div>
                      </td> -->
                      <td style="padding-left:30px" width="100%">
                        <div id="quiz-question">
                          The mailbox rule generally makes acceptance of an offer effective at the time the acceptance is dispatched. The mailbox rule does not apply if
                        </div>
                        <div>&nbsp;</div>
                        <table>
                          <tr>
                            <td valign="top" width="5%">
                               <label id="quiz_handle_a">
                                <div id="quiz_select1_a" style="position: absolute;margin-left: 6.5px;margin-top:1px;">A</div>
                                <div id="quiz_select2_a" class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_a" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_a" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label> 
                            </td>
                            <td style="padding-left:5px" id="quiz-choice_A">Both the offeror and offeree are merchants.asdfasdfasdfasdf adsfa dfa sdfa sdf asdf asdf asdf asdf asdf asdf adsf asdf asdf adsf asdf asdf asdf asdf asdf asdf asdfasd f</td>
                          </tr>
                          <tr>
                            <td valign="top" width="5%">
                              <label id="quiz_handle_b">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">B</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_b" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 100;">
                                  <ins id="quiz_select_b" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>   
                            </td>
                            <td style="padding-left:5px" id="quiz-choice_B">The offer proposes a sale of real estate.</td>
                          </tr>
                          <tr>
                            <td valign="top" width="5%">
                              <label id="quiz_handle_c">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">C</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_c" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_c" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label> 
                            </td>
                            <td style="padding-left:5px" id="quiz-choice_C">The offer provides that an acceptance shall not be effective until actually received.</td>
                          </tr>
                          <tr>
                            <td valign="top" width="5%">
                              <label id="quiz_handle_d">
                                <div style="position: absolute;margin-left: 6.5px;margin-top:1px;">D</div>
                                <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                  <input id="quiz_radio_d" type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;">
                                  <ins id="quiz_select_d" class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                              </label>   
                            </td>
                            <td style="padding-left:5px" id="quiz-choice_D">The duration of the offer is not in excess of 3 months.</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <!-- <span id="chosen_intromsg">Please choose a letter now</span>&nbsp; -->
                        <div id="quizNxtBtnHere" class="pull-right"><button class="btn btn-success btn-lg" id="btnNxt" onclick="util.showNextQuiz()"><span>Next</span></button></div>
                        <div id="quizPrevBtnHere" class="pull-left"><button class="btn btn-success btn-lg" id="btnPrev" onclick="util.ShowPrevQuiz()" disabled="disable"><span>Previous</span></button></div>
                        <span id="chosen_letter"></span>.&nbsp;&nbsp;
                        <span id="chosen_details"></span>                        
                      </td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">General Instructions</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-3 col-xs-6">         
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3 class="subject-totalitems">100</h3>
                        <p>Total items</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-help"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3 class="subject-passingrate">75<sup style="font-size: 20px">%</sup></h3>
                        <p>Passing Rate</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-ribbon-b"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3 class="subject-timeduration">60</h3>
                        <p>Time duration in minutes</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-clock"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3 class="subject-attempts">1</h3>
                        <p>Number of attempts</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-compose"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
      <!-- end quiz tab -->
    </div>
  </div>
</div>
<script>

  $(function(){
    var NEWS_DATA=[];
    var USER_DATA=[];
    var SUBJECT_DATA=[];
    var TOPIC_DATA=[];
    var EXAM_DATA=[];
    var SCORE_LOG=[];
    var QUESTION_DATA=[];
    var PASSING_RATE=[];
    var INCOMPLETE = false;
    $('input[type=radio]').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
      increaseArea: '20%' // optional
    });

    //Home Tab Controllers
    function shortText(text){if(text.length<10)return text; var shortText = jQuery.trim(text).substring(0, 50).split(" ").slice(0, -1).join(" ") + "..."; return shortText; }
    
    $.ajax({
        method: "POST",
        url: "app/models/user.php"
    }).done(function(userdata){
        USER_DATA = JSON.parse(userdata);
      $.ajax({
        method: "POST",
        url: "app/models/news.php",
      }).done(function(newsdata){
          NEWS_DATA = JSON.parse(newsdata);
            render_StudentNews(NEWS_DATA,USER_DATA);  
      })
    });
    $.ajax({
        method: "POST",
        url: "app/models/exam.php"
    }).done(function(examdata){
        EXAM_DATA = JSON.parse(examdata);
      $.ajax({
        method: "POST",
        url: "app/models/subject.php",
      }).done(function(subjectdata){
         SUBJECT_DATA = JSON.parse(subjectdata);
          $.ajax({
            method: "POST",
            url: "app/models/question.php",
          }).done(function(questiondata){
              QUESTION_DATA = JSON.parse(questiondata);
                render_StudentExams(SUBJECT_DATA,EXAM_DATA,QUESTION_DATA);  
          })
      })
    });
    function render_StudentNews(newsdata,usersdata){
    
      let html = '';  
      var i = 0;
      var j = 0;
      for(i in newsdata){
        for(j in usersdata){
          // console.log(newsdata[i]);
          // console.log(usersdata[j]);
          if (newsdata[i].user_id===usersdata[j].firstname+' '+usersdata[j].lastname) {
            html += '<div class="post" style="border:1px solid #ddd;padding:5px;">';
               html +=  '<div class="user-block">';
                 html +=  '<img class="img-circle img-bordered-sm" src="dist/img/avatar.png" alt="user image">';
                 html +=  '<span class="username">';
                   html +=  '<a href="#">'+usersdata[j].firstname+' '+usersdata[j].lastname+'</a>';
                   html +=  '<!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->';
                 html +=  '</span>';
                 html +=  '<span class="description">Shared publicly - 7:30 PM today</span>';
               html +=  '</div>';
               html +=  '<p>'+newsdata[i].content;
                html += '</p>'
               html +=  '<ul class="list-inline">';
                 html +=  '<li><a href="#" class="link-black text-sm"><i class="fa fa-commenting-o margin-r-5"></i> General Announcement</a></li>';
                 html +=  '<li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-eye margin-r-5"></i> Seen (5)</a></li>';
             html +=  '</ul>';
             html +=  '</div>';
          }
        }
      }
      $('.news').html(html);
    }
    function getScore(selected_answer,correct_answer)
    {
      // console.log('getScore');
      var score = 0;
      if (selected_answer===correct_answer) {
        score++;
      }
      return score;
    }
    function saveScoreLog(subject_id,avg){
      // console.log('saveScoreLog');
      data = {
        "subject_id":subject_id,
        "average":avg
      }
      SCORE_LOG.push(data);
    }
    function getPassingRates(subject_id,passingate){
      // console.log('getPassingRates');
      data = {
        "subject_id":subject_id,
        "passingate":passingate
      }
      SCORE_LOG.push(data);
    }
    function getAvg(score,items,rate)
    {
      // console.log('getAvg');
      // Total Score = summation [( raw score per subject / total score per subject)*(percent weight of subject)] 
      var percentage = 0;
      percentage = score/items;
      percentage = percentage*rate;
      return percentage;
    }
    function getGenAvg(avg){
      var a=0;
      var len = avg.length;
      var genAvg;
      var sum=0;
      for(a in avg){
        sum = sum + avg[a];
      }
      genAvg = sum/len;
      return genAvg;
    }
    function getResults(genAvg,avg,passingRates){
      // Note: PASSED
      //       if genAvg>=75% && subjAvg>=65(passingrate)% :. passed
      //       CONDITIONAL
      //       if genAvg==75% && subjAvg=75%(passingate) >= noOfSubj/2 :. conditional
      //       FAILED
      //       if genAvg<75% :.failed
      //       http://pinoyaccountant.blogspot.com/2011/07/passing-exam-and-conditional-status.html
      var r=0;
      var a=0;
      var failedSubj=0;
      var aLen = avg.length;
      var pLen = passingRate.length;
      for(a in avg){
        for(r in passingRate){
          if(avg[a].avg<passingRate[r].passingrate){
            failedSubj++;
          }
          if (avg[a].subject_id==passingRate[r].subject_id) {
            if(genAvg >= 75 && avg[a].avg>=passingRate[r].passingrate){
              return "Passed";
            }
            if(genAvg >= 75 && avg[a].avg<passingRate[r].passingrate && failedSubj < Math.round(failedSubj/2)){
              return "Failed";
            }
            if(genAvg >= 75 && avg[a].avg<passingRate[r].passingrate && failedSubj >= Math.round(failedSubj/2)){
              return "Conditional";
            }  
          }
          
        }
      }
    }
    function render_StudentExams(subjectdata,examdata,questiondata){
      console.log('rSE');
      console.log(examdata);
      console.log(subjectdata);
      console.log(questiondata);
      // exam: id,user_id,subject_id,question_id,answer
      var s = 0;
      var e = 0;
      var q = 0;
      var score = 0;
      var status= '';
      var data = [];
      var examLength = examdata.length;
      var subjectLength = subjectdata.length;
      for(s in subjectdata){
        getPassingRates(subjectdata[s].id,subjectdata[s].passingate);
        for(e in examdata){
          if (examdata[e].user_id==util.getUserID()) {
            // console.log('found ID');
            if (examdata[e].subject_id == subjectdata[s].id ) {
              for(q in questiondata){
                if (examdata[e].subject_id==questiondata[q].subject_id && examdata[e].question_id==questiondata[q].id) {
                  score += getScore(examdata[e].answer,questiondata[q].answer);
                }
                  
              }

              var avg = getAvg(score,subjectLength);
              console.log(score);
              saveScoreLog(examdata[e].subject_id,avg);
              var arr ={
                "subject":subjectdata[s].name,
                "result":{
                  "progressbar":"info",
                  "width":Math.round(avg)
                },
                "score":{
                  "badge":"maroon",
                  "data":avg
                }
              };
              // data.push(arr);
            }
            else{
              INCOMPLETE = true;
              var arr ={
                "subject":subjectdata[s].name,
                "result":{
                  "progressbar":"danger",
                  "width":"0"
                },
                "score":{
                  "badge":"red",
                  "data":"Not taken"
                }
              };
              // data.push(arr);
            }
          }
          else{
            // console.log('id not found');
            INCOMPLETE = true;
            var arr ={
                "subject":subjectdata[s].name,
                "result":{
                  "progressbar":"success",
                  "width":"0"
                },
                "score":{
                  "badge":"red",
                  "data":"Not taken"
                }
              }
          };
        }
          data.push(arr); 
      } 
      

      // let data = [
      //   {
      //     "subject":"Finance",
      //     "result":{
      //       "progressbar":"danger",
      //       "width":"55",
      //     },
      //     "score":{
      //       "badge":"red",
      //       "data":"55"
      //     }
      //   },
      //   {
      //     "subject":"Law and Order",
      //     "result":{
      //       "progressbar":"yellow",
      //       "width":"70",
      //     },
      //     "score":{
      //       "badge":"yellow",
      //       "data":"70"
      //     }
      //   },
      //   {
      //     "subject":"History",
      //     "result":{
      //       "progressbar":"primary",
      //       "width":"30",
      //     },
      //     "score":{
      //       "badge":"light-blue",
      //       "data":"30"
      //     }
      //   },
      //   {
      //     "subject":"Criminal and Investigation",
      //     "result":{
      //       "progressbar":"success",
      //       "width":"100",
      //     },
      //     "score":{
      //       "badge":"green",
      //       "data":"100"
      //     }
      //   },
      //    {
      //     "subject":"Criminal and Investigation 1",
      //     "result":{
      //       "progressbar":"maroon",
      //       "width":"68",
      //     },
      //     "score":{
      //       "badge":"maroon",
      //       "data":"68"
      //     }
      //   }
      // ];
      let html = `
        <table class="table table-bordered">
          <tr>
            <th style="width: 10px">#</th>
            <th>Subject</th>
            <th>Result</th>
            <th style="width: 40px">Score</th>
          </tr>`;
      for(let i=0;i<data.length;i++){
        html+=`
          <tr>
            <td>${i+1}.</td>
            <td>${data[i].subject}</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-${data[i].result.progressbar}" style="width: ${data[i].result.width}%"></div>
              </div>
            </td>
            <td><span class="badge bg-${data[i].score.badge}">${data[i].score.data}%</span></td>
          </tr>        
      `;
      }
      html+=`</table>`;
      $('.exams').html(html);
      $('.exams-total').html(`Total Exam Taken: ${EXAM_DATA.length}`);
    }

    //Take Exam Controllers
    function render_StudentSubjects(){      
      $.ajax({
        url:"app/models/subject.php",
        method: "post",
        data: {
          action:"topics"
        }
      }).done(function(data){
        // console.log(data);
        util.data.STUDENT_SUBJECTS_AND_TOPICS = JSON.parse(data);
        // console.log(util.data.STUDENT_SUBJECTS_AND_TOPICS[0][0][0]);
        loadChooseSubject();

        function loadChooseSubject(){
          /*
            bootstrap css select guide
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option disabled="disabled">California (disabled)</option>
          */
          let html = ``;
         util.data.STUDENT_SUBJECTS_AND_TOPICS.map((obj)=>{
            html += `<option>${obj.name}</option>`;          
          });
          $('.chooseSubject').html(html);
        }
        function loadChooseTopic(subject){          
          let html = ``;
          let index=0;
          for(let obj of util.data.STUDENT_SUBJECTS_AND_TOPICS){
            // console.log(`${obj.name}===${subject}`);
            if(obj.name==subject){
              util.data.STUDENT_SUBJECTS_AND_TOPICS[index][0].map((topic)=>{
                html += `<option value="${topic.id}">${topic.name}</option>`;
                
              });
              break;
            }
            index++;
          }          
          $('.chooseSubject').val(util.data.STUDENT_SUBJECTS_AND_TOPICS[index].name);
          $('.chooseTopic').html(html);
          $('.subject-totalitems').html(util.data.STUDENT_SUBJECTS_AND_TOPICS[index].items);
          $('.subject-passingrate').html(util.data.STUDENT_SUBJECTS_AND_TOPICS[index].passingrate);
          $('.subject-timeduration').html(util.data.STUDENT_SUBJECTS_AND_TOPICS[index].timeduration);
          $('.subject-attempts').html(util.data.STUDENT_SUBJECTS_AND_TOPICS[index].attempts);
          $('.subject-chosen').html(shortText($('.chooseSubject').val()));

          util.data.STUDENT_SUBJECT_INDEX = index;
          util.data.STUDENT_SUBJECT_ID_CHOSEN = util.data.STUDENT_SUBJECTS_AND_TOPICS[index].id;
          util.data.STUDENT_TOPIC_ID_CHOSEN = $('.chooseTopic').val();
        }

        
        function getTopicID(topic,index){let id = -1; util.data.STUDENT_SUBJECTS_AND_TOPICS[index][0].map((obj)=>{if(obj.name === topic){id = obj.id; } }); return id; }
        
        $('.chooseSubject1').change(function(){
          loadChooseTopic($('.chooseSubject1').val());          
          // console.log($('.chooseSubject').val());
        });
        $('.chooseTopic').change(function(){
          // loadChooseTopic($('.chooseSubject').val());
          util.data.STUDENT_TOPIC_ID_CHOSEN = $('.chooseTopic').val();
          // console.log(util.data.STUDENT_TOPIC_ID_CHOSEN);
          // console.log($('.chooseTopic').val());
        });
        
        $('.startquiz').click(function(){
          // console.log("Start Quiz");
          loadQuizSheet(util.data.STUDENT_TOPIC_ID_CHOSEN);
        });
      });
    }
    render_StudentSubjects();



    
    //Quiz Controllers
    function loadQuizSheet(topic_id)
    {
      // console.log('topicid_____'+topic_id);
      $.ajax({
          method: "POST",
          url: "app/models/exam.php",
          // data:{'subject_id':subject_id}
          data:{'topic_id':topic_id,'action':'getquiz'}
      }).done(function(questions){
          // console.log(questions);
          // $('#subjectdesc').html(getSubjectDesc(subjectid));
          quest = JSON.parse(questions);
          util.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ = quest;
          util.data.CURRENT_QUIZ_ITEMS = quest.length;
          // console.log(quest);
          if(quest.length>0){
            util.showQuiz(util.data.CURRENT_QUIZ_PAGE);
            // let html = ``;
            // for(let i=0;i<quest.length;i++){
            //   html+=`<li><a href="#" id="btnQuiz${quest[i].id}" onclick="util.showQuiz(${i})">${util.formatItem(i+1)}</a></li>`;
            // }
            // $('#quiz-nav').html(html);
          }
          else{
            util.showQuiz(-1);
          }
          // $('.chooseSubject1').attr('disabled','disabled');
          $('.subject-chosen').html(shortText($('.chooseSubject').val()));
          // $('.startquiz').attr('disabled','disabled');
          $('.chooseagain').attr('disabled','disabled');
          $('.quiz-sheet').show();
          // $('.chooseSubject').removeAttr('disabled');
      });
    }
    // $("#quiz_radio_a").on("ifChanged", function(){
    //   util.saveQuizAnswer();
    // });
    // $("#quiz_radio_b").on("ifChanged", function(){
    //   util.saveQuizAnswer();
    // });
    // $("#quiz_radio_c").on("ifChanged", function(){
    //   util.saveQuizAnswer();
    // });
    // $("#quiz_radio_d").on("ifChanged", function(){
    //   util.saveQuizAnswer();
    // });
    $('.exam-sheet').hide();
    $('.quiz-sheet').hide();
  });
class Utilities{
  constructor(){      
    this.data = {
      STUDENT_SUBJECTS_AND_TOPICS:[],
      STUDENT_SUBJECT_INDEX:[],
      STUDENT_SUBJECT_ID_CHOSEN:[],
      STUDENT_TOPIC_ID_CHOSEN:[],
      STUDENT_SUBJECTS_AND_TOPICS_QUIZ:[],
      STUDENT_QUIZ_LOG:[],
      STUDENT_SUBJECTS_AND_TOPICS_QUIZ_SELECTED_INDEX:-1,
      CURRENT_QUIZ_ID: 0,
      CURRENT_QUIZ_ITEMS: 0,
      CURRENT_QUIZ_PAGE: 0,
      PREV_QUIZ_PAGE: false,
      CURRENT_QUIZ_SCORE: 0
    };
  }
  formatItem(val){if(val<10)return '00'+val; else if(val<100)return '0'+val; else return val; }
    
    //End Exam Utils
    //Quiz Utils
    showQuizScore()
    {
      var score = 0;
      var log = 0;
      var logs = this.data.STUDENT_QUIZ_LOG;
      for(log in logs){
        if (logs[log].correct_answer===logs[log].selected_answer) {
          score++;
        }
      }
      this.data.CURRENT_QUIZ_SCORE=score;
      $('#quizScore').html('Score : '+score+'/'+this.data.CURRENT_QUIZ_ITEMS);
    }
    showQuizResult()
    {
      this.data.CURRENT_QUIZ_PAGE=0;
      this.saveQuizAnswer(this.data.CURRENT_QUIZ_PAGE);
      // alert('SCORE: '+this.data.CURRENT_QUIZ_SCORE+'/'+this.data.CURRENT_QUIZ_ITEMS+'__'+this.data.STUDENT_QUIZ_LOG[0].quizID);
      var title = "QUIZ SCORE: "+this.data.CURRENT_QUIZ_SCORE+"/"+this.data.CURRENT_QUIZ_ITEMS+".";
      var txt = '';
      var log = 0;
      var logs = this.data.STUDENT_QUIZ_LOG;
      var p = 1;
      var i = 1;
      txt+='<font size="2.5">';
      for(log in logs)
      {
        // txt+='<p class="text-muted">Quiz No: </p>';
        txt+='<p class="text-muted">Quiz No. '+this.formatItem(i++)+'</p>';
        // txt+='<p class="text-light-blue">Question: </p>';
        // txt+='<p class="text-light-blue">Question: '+logs[log].question+'</p>';
        // txt+='<p class="text-aqua">Your Answer: </p>';
        txt+='<p class="text-aqua">Your Answer: '+logs[log].selected_answer+'. '+logs[log].selected_answer_details+'</p>';
        // txt+='<p class="text-green">Correct Answer: </p>';
        txt+='<p class="text-green">Correct Answer'+logs[log].correct_answer+'. '+logs[log].correct_answer_details+'</p>';
      }
      txt+='</font>';
      swal({
        title: title,
        text: txt,
        html: true
      });this.
      $('#btnSubmit').prop("disabled",true);
    }
    ShowPrevQuiz()
    {
      this.data.CURRENT_QUIZ_PAGE--;
       this.saveQuizAnswer(this.data.CURRENT_QUIZ_PAGE);
      this. resetQuizCheckbox();
      this.getPrevAns(this.data.CURRENT_QUIZ_PAGE);
      // this.saveQuizAnswer(this.data.CURRENT_QUIZ_PAGE);
      // this.checkAnswer(this.data.CURRENT_QUIZ_PAGE);
      this.PREV_QUIZ_PAGE=true;
      this.showQuiz(this.data.CURRENT_QUIZ_PAGE);
      // this.checkAnswer();
      // var c = this.checkAnswer();
      // this.data.CURRENT_QUIZ_PAGE--;
    }
    showNextQuiz()
    {
      this.data.CURRENT_QUIZ_PAGE++;
       this.saveQuizAnswer(this.data.CURRENT_QUIZ_PAGE);
      this. resetQuizCheckbox();
      this.getPrevAns(this.data.CURRENT_QUIZ_PAGE);
      // this.checkAnswer(this.data.CURRENT_QUIZ_PAGE);
      this.PREV_QUIZ_PAGE=false;
      if(this.data.CURRENT_QUIZ_PAGE==this.data.CURRENT_QUIZ_ITEMS-1)
      {
        let html = `<button class="btn btn-success btn-lg" id="btnSubmit" onclick="util.showQuizResult()"><span>Submit</span>`;
        $('#quizNxtBtnHere').html(html);
      }
      else{
        // this.data.CURRENT_QUIZ_PAGE++;
        // console.log('snq__'+q);
        // console.log('it__'+this.data.CURRENT_QUIZ_ITEMS);
        if (this.data.CURRENT_QUIZ_PAGE<=this.data.CURRENT_QUIZ_ITEMS-1) {
          this.showQuiz(this.data.CURRENT_QUIZ_PAGE);
          // this.checkAnswer();
        }    
        // this.saveQuizAnswer(this.data.CURRENT_QUIZ_PAGE);
      }    
      
      console.log(this.data.STUDENT_QUIZ_LOG);
    }
    getPrevAns(index){
      var logs = this.data.STUDENT_QUIZ_LOG[index];
      if (logs) {
        if($('#quiz-question-sequence').html() === logs.quizID){
          this.quizSelectAnswer(logs.selected_answer);
          console.log('naa');
        }
      }
    }
    showQuiz(index){
      
     
      console.log('pg__'+index);
      // if (this.data.CURRENT_QUIZ_PAGE<=0) {
      //   $('#btnPrev').attr('disabled','disable');
      // }

     
      if (index>=0) {
        // console.log(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[q].id);
        if (index>0){
          $('#btnPrev').prop("disabled",false);
        }
        else{
          $('#btnPrev').prop("disabled",true); 
        }
        $('#quiz-table').show();
        $('#quiz-question-sequence').html(this.formatItem(index+1));
        $('#quiz-question').html(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].question);
        $('#quiz-choice_A').html(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].choice_a);
        $('#quiz-choice_B').html(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].choice_b);
        $('#quiz-choice_C').html(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].choice_c);
        $('#quiz-choice_D').html(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].choice_d);
        
        
        
        this.showQuizScore();
      }
      else{
        $('#quiz-table').hide();
        $('#quiz-nav').html("NO QUESTION ASSIGNED!");
      }
    }
    saveQuizAnswer(index){
      console.log('sqa__'+this.data.CURRENT_QUIZ_PAGE);
      var cA = $('#quiz_radio_a').iCheck('update')[0].checked;
      var cB = $('#quiz_radio_b').iCheck('update')[0].checked;
      var cC = $('#quiz_radio_c').iCheck('update')[0].checked;
      var cD = $('#quiz_radio_d').iCheck('update')[0].checked;
      if(cA){
        this.data.STUDENT_QUIZ_LOG[index]={
          "quizID":$('#quiz-question-sequence').html(),
          "quesID":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].id,
          "question":$('#quiz-question').html(),
          "selected_answer":"A",
          "selected_answer_details":$('#quiz-choice_A').html(),
          "B_answer_details":$('#quiz-choice_B').html(),
          "C_answer_details":$('#quiz-choice_C').html(),
          "D_answer_details":$('#quiz-choice_D').html(),
          "correct_answer":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer,
          "correct_answer_details":$('#quiz-choice_'+this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer).html()
        };
        // this.showQuizScore(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[this.data.CURRENT_QUIZ_PAGE].answer,'A');

      }
      else if(cB){
        this.data.STUDENT_QUIZ_LOG[index]={
          "quizID":$('#quiz-question-sequence').html(),
          "quesID":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].id,
          "question":$('#quiz-question').html(),
          "selected_answer":"B",
          "selected_answer_details":$('#quiz-choice_B').html(),
          "A_answer_details":$('#quiz-choice_A').html(),
          "C_answer_details":$('#quiz-choice_C').html(),
          "D_answer_details":$('#quiz-choice_D').html(),
          "correct_answer":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer,
          "correct_answer_details":$('#quiz-choice_'+this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer).html()
        };
        // this.showQuizScore(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[this.data.CURRENT_QUIZ_PAGE].answer,'B');
      }
      else if(cC){
        this.data.STUDENT_QUIZ_LOG[index]={
          "quizID":$('#quiz-question-sequence').html(),
          "quesID":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].id,
          "question":$('#quiz-question').html(),
          "selected_answer":"C",
          "selected_answer_details":$('#quiz-choice_C').html(),
          "B_answer_details":$('#quiz-choice_B').html(),
          "A_answer_details":$('#quiz-choice_A').html(),
          "D_answer_details":$('#quiz-choice_D').html(),
          "correct_answer":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer,
          "correct_answer_details":$('#quiz-choice_'+this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer).html()
        };
        // this.showQuizScore(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[this.data.CURRENT_QUIZ_PAGE].answer,'C');
      }
      else if(cD){
        this.data.STUDENT_QUIZ_LOG[index]={
          "quizID":$('#quiz-question-sequence').html(),
          "quesID":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].id,
          "question":$('#quiz-question').html(),
          "selected_answer":"D",
          "selected_answer_details":$('#quiz-choice_D').html(),
          "B_answer_details":$('#quiz-choice_B').html(),
          "C_answer_details":$('#quiz-choice_C').html(),
          "A_answer_details":$('#quiz-choice_A').html(),
          "correct_answer":this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer,
          "correct_answer_details":$('#quiz-choice_'+this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[index].answer).html()
        };
        // this.showQuizScore(this.data.STUDENT_SUBJECTS_AND_TOPICS_QUIZ[this.data.CURRENT_QUIZ_PAGE].answer,'D');
      }
      // console.log(cA);
      // console.log(cB);
      // console.log(cC);
      // console.log(cD); 
    }
      
    resetQuizCheckbox(){$('#quiz_radio_a').prop('disabled',false);$('#quiz_radio_a').iCheck('uncheck'); $('#quiz_radio_b').prop('disabled',false);$('#quiz_radio_b').iCheck('uncheck'); $('#quiz_radio_c').prop('disabled',false);$('#quiz_radio_c').iCheck('uncheck'); $('#quiz_radio_d').prop('disabled',false);$('#quiz_radio_d').iCheck('uncheck'); $('#chosen_intromsg').html("Please choose a letter now"); $('#chosen_letter').html(""); $('#chosen_details').html(""); }
    getSelectedQuiz(){return this.data.CURRENT_QUIZ_ID; }
    //NOTE: UPDATE THIS CODE. USER ID MUST BE ASSIGNED USING A SESSION VARIABLE
    getUserID(){ return 2;}
    saveQuizLog(quizlog){
      this.data.STUDENT_QUIZ_LOG.push(quizlog);
      this.resetQuizCheckbox();
      // console.log(this.data.STUDENT_QUIZ_LOG);
    }
    quizSelectAnswer(answer){
      let btnQuiz = '#btnQuiz'+this.getSelectedQuiz();
      $(btnQuiz).addClass('bg-green');
      if(answer=="A"){
          $('#quiz_radio_a').iCheck('check');
          $('#quiz_radio_b').attr('disabled','disabled');
          $('#quiz_radio_c').attr('disabled','disabled');
          $('#quiz_radio_d').attr('disabled','disabled');
          $('#chosen_intromsg').html("You choose ");
          $('#chosen_letter').html("A");
          $('#chosen_details').html($('#quiz-choice_a').html());
      }
      else if(answer=="B"){
          $('#quiz_radio_b').iCheck('check');
          $('#quiz_radio_a').attr('disabled','disabled');
          $('#quiz_radio_c').attr('disabled','disabled');
          $('#quiz_radio_d').attr('disabled','disabled');
          $('#chosen_intromsg').html("You choose ");
          $('#chosen_letter').html("B");
          $('#chosen_details').html($('#quiz-choice_a').html());
      }
      else if(answer=="C"){
          $('#quiz_radio_c').iCheck('check');
          $('#quiz_radio_a').attr('disabled','disabled');
          $('#quiz_radio_b').attr('disabled','disabled');
          $('#quiz_radio_d').attr('disabled','disabled');
          $('#chosen_intromsg').html("You choose ");
          $('#chosen_letter').html("C");
          $('#chosen_details').html($('#quiz-choice_c').html());
      }
      else if(answer=="D"){
          $('#quiz_radio_d').iCheck('check');
          $('#quiz_radio_a').attr('disabled','disabled');
          $('#quiz_radio_b').attr('disabled','disabled');
          $('#quiz_radio_c').attr('disabled','disabled');
          $('#chosen_intromsg').html("You choose ");
          $('#chosen_letter').html("D");
          $('#chosen_details').html($('#quiz-choice_d').html());
      }
    }
  }
  let util = new Utilities();
</script>
