<div>
        <ul class="list">
          <li class="list-header">
            <div>投票主題：</div>
            <div>單/複選題：</div>
            <div>投票期間：</div>
            <div>剩餘天數：</div>
            <div>投票人數：</div>
          </li>
          <?php
          $subjects=all('subjects'); //取得所有投票列表
          foreach($subjects as $subject){//使用迴圈印內容
            echo "<a href='?do=vote_result&id={$subject['id']}'>";//要把投票帶去哪
            echo "<li class='list-items'>";
            echo "<div>{$subject['subject']}</div>";//只取得欄位

            if($subject['multiple']==0){
              echo "<div class='text-center'>單選題</div>";
            }else{
              echo "<div class='text-center'>複選題</div>";
            }

            echo "<div class='text-center'>";//投票開始與結束時間
            echo $subject['start']. "~" .$subject['end'];
            echo "</div>";

            echo "<div class='text-center'>";//投票剩餘天數
              $today=strtotime("now");
              $end=strtotime($subject['end']);
              if(($end-$today)>0){//如果投票還在進行
                $remain=floor(($end-$today)/(60*60*24));
                echo "倒數".$remain."天結束";
              }else{//如果投票已經截止
                echo "<span style='color:grey;'>投票已截止</span>";
              }
            echo "</div>";

            echo "<div class='text-center'>{$subject['total']}</div>";//投票總人數
            echo "</li>";
            echo "</a>";
          }
          ?>
          
        </ul>
      </div>