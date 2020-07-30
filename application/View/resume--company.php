<div class="resume">
    <!-- 이력서 -->
    <div class="resume__container">
        <h1 class="resume__title">이 력 서</h1>
        <!-- 인적 사항 -->
        <table class="resume__table">
            <tbody>
                <tr>
                    <td class="resume__image" rowspan="4">
                        <img src="<?=$resume->personal_data->image?>" alt="">
                    </td>
                    <td class="resume__label">이 름</td>
                    <td class="resume__input"><?=$resume->personal_data->name?></td>
                </tr>
                <tr>
                    <td class="resume__label">생 년 월 일</td>
                    <td class="resume__input"><?=$resume->personal_data->birthday?></td>
                </tr>
                <tr>
                    <td class="resume__label">연 락 처</td>
                    <td class="resume__input"><?=$resume->personal_data->phone?></td>
                </tr>
                <tr>
                    <td class="resume__label">이 메 일</td>
                    <td class="resume__input"><?=$resume->personal_data->email?></td>                </tr>
            </tbody>
        </table>
        <!-- /인적 사항 -->
        <!-- 학력 -->
        <table class="resume__table" data-info="school_data">
            <tbody>
                <tr>
                    <td rowspan="<?=(count($resume->school_data) < 1 ? 1 : count($resume->school_data)) + 1?>" class="resume__label resume__autosize">학 력</td>
                    <td class="resume__head">기 간</td>
                    <td class="resume__head">학 교 명</td>
                    <td class="resume__head">전 공</td>
                    <td class="resume__head">비 고</td>
                </tr>
                <?php foreach($resume->school_data as $item):?>
                <tr>
                    <td class="resume__input wx-200"><?=$item->period?></td>
                    <td class="resume__input"><?=$item->school_name?></td>
                    <td class="resume__input"><?=$item->school_field?></td>
                    <td class="resume__input wx-100"><?=$item->other?></td>
                </tr>
                <?php endforeach;?>
                <?php if(count($resume->school_data) === 0):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input wx-100"></td>
                </tr>
                <?php endif;?>
            </tbody>
        </table>
        <!-- /학력 -->
        <!-- 교내 활동 -->
        <table class="resume__table" data-info="act_data">
            <tbody>
                <tr>
                    <td rowspan="<?=(count($resume->act_data) < 1 ? 1 : count($resume->act_data)) + 1?>" class="resume__label resume__autosize">교 내 활 동</td>
                    <td class="resume__head">날 짜</td>
                    <td class="resume__head">상 세 내 용</td>
                </tr>
                <?php foreach($resume->act_data as $item):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endforeach;?>
                <?php if(count($resume->act_data) === 0):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endif;?>
            </tbody>
        </table>
        <!-- /교내 활동 -->
        <!-- 자격 사항 -->
        <table class="resume__table" data-info="license_data">
            <tbody>
                <tr>
                    <td rowspan="<?=(count($resume->license_data) < 1 ? 1 : count($resume->license_data)) + 1?>" class="resume__label resume__autosize">자 격 사 항</td>
                    <td class="resume__head">취 득 일</td>
                    <td class="resume__head">자 격 명</td>
                    <td class="resume__head">발 급 기 관</td>
                </tr>
                <?php foreach($resume->license_data as $item):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endforeach;?>
                <?php if(count($resume->license_data) === 0):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endif;?>
            </tbody>
        </table>
        <!-- /자격 사항 -->
        <!-- 수상 내역 -->
        <table class="resume__table" data-info="award_data">
            <tbody>
                <tr>
                    <td rowspan="<?=(count($resume->award_data) < 1 ? 1 : count($resume->award_data)) + 1?>" class="resume__label resume__autosize">수 상 내 역</td>
                    <td class="resume__head">수 상 일</td>
                    <td class="resume__head">수 상 명</td>
                    <td class="resume__head">발 급 기 관</td>
                </tr>
                <?php foreach($resume->award_data as $item):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endforeach;?>
                <?php if(count($resume->award_data) === 0):?>
                <tr>
                    <td class="resume__input wx-200"></td>
                    <td class="resume__input"></td>
                    <td class="resume__input"></td>
                </tr>
                <?php endif;?>
            </tbody>
        </table>
        <!-- /수상 내역 -->
    </div>
    <!-- /이력서 -->
    <!-- 자기소개서 -->
    <div class="resume__container mt-5">
        <div class="resume__title">자기소개서</div>
        <table class="resume__table">
            <tbody>
                <tr>
                    <td class="resume__label">성 장 과 정</td> 
                    <td class="resume__text" data-info="growth_text">
                        <?= nl2br(htmlentities($resume->growth_text)) ?>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">성격 및 특기</td> 
                    <td class="resume__text" data-info="character_text">
                        <?= nl2br(htmlentities($resume->character_text)) ?>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">지 원 동 기</td> 
                    <td class="resume__text" data-info="reason_text">
                        <?= nl2br(htmlentities($resume->reason_text)) ?>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">입사 후 포부</td> 
                    <td class="resume__text" data-info="plan_text">
                        <?= nl2br(htmlentities($resume->plan_text)) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /자기소개서 -->
</div>

<!-- 업데이트 영역 -->
<div id="update__area" class="hidden">
    <div class="process">
        <i class="fas fa-circle-notch fa-spin"></i>
        <span>업데이트 중입니다···.</span>
    </div>
    <div class="success">
        <i class="fas fa-check"></i>
        <span>업데이트 완료!</span>
    </div>
</div>
<!-- /업데이트 영역 -->