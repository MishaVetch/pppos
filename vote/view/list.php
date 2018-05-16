
<?//dump($result)?>
<h6>*чтобы увидеть результаты, перезагрузите страницу после, того, как отдадите голос</h6>
<? foreach($result['votes'] as $id_vote => $vote):?>
	<div class="vote">
		<li style="position: relative; ">
			<h1 style="text-align: center; color: red; font-weight: bold;"><?=$vote['vote_name']?></h1>
			<hr>
			<? foreach ($vote['parts'] as $id => $student): ?>
				<div style="border-bottom: 1px solid black;">
				<input type="radio" class="checkbox-vote" name="part<?=$id_vote?>" value="<?=$student['id']?>" id = "part<?=$student['id']?><?=$id_vote?>"<? if($vote['given_to'] == $student['id']): ?> checked style = "background-color: #444;"<?endif?><? if($vote['given_to'] != 0): ?> disabled<? endif ?>>
					<label for = "part<?=$student['id']?>" class="forcheckbox" style = "width: 90%; margin: 0; position: relative;">
						<?if($vote['given_to'] != 0):?>
						<div style="background-color: #ddd; width: 100%; height: 100%; position: absolute;">
							<div style="background-color: #bbb; width: <?=$student['percentage']?>%; height: 100%; position: absolute;">
							</div>
							<div style="position: absolute; right: 10px; line-height: 80px; font-weight: bold">
								<?=number_format ($student['percentage'], 2, $dec_point = ".", $thousands_sep = " ")?>% (<?=$student['votes']?>)
							</div>
						</div>
						<?endif?>
						<div class = "user-info" style="position: relative; padding-bottom: 10px; background-color: transparent;">
		    				<div style="display: inline-block; margin-left: 5px;">
			    				<img src="<?=getAvatarPath($student['photo'], $student['id'])?>" class = "request-photo">
			    				<div style="display: inline-block;">
				    				<div class="request-from">
				    					<a href="/id<?=$student['id']?>" style="color: #000"><?=$student['fio']?></a>
				    				</div>
				    				<div class="request-faculty"><?=$student['faculty']?>, <?=$student['group']?></div>
				    			</div>
			    			</div>
						</div>
					</label>
				</div>
			<? endforeach ?>
		</li>
		<div id="temp<?=$id_vote?>"></div>
	</div>
	<? if($vote['given_to'] == 0): ?>
		<button name="apply" class="button" onclick="giveVote(<?=$id_vote?>)" style = "margin: auto; display: block;" id = "button<?=$id_vote?>">Отдать голос!</button>
	<? endif ?>
<? endforeach ?>

<script type="text/javascript">
	function giveVote(id) {
		var id_student = $("[type = 'radio'][name = 'part"+id+"']:checked").val()
		if(id_student !== undefined){
			$(function(){
	            $.ajax({
	                type: "POST",
	                url: '/model/ajax/vote/vote.php',
	                data: {
	                	vote:id,
	                	id:id_student
	                },
	                success: function(data){
	                	document.getElementById("temp" + id).innerHTML = data;
	                	if(data == ""){
		                	document.getElementById(("part" + id_student) + id).style.backgroundColor = "#444";
		                	$.each($("input[name = 'part" + id + "']"), function(k, v){
		                		v.disabled = true;
		                	});
		                	document.getElementById("button" + id).remove();
		                }
	                }
	            });
	        });
		}
	}
</script>