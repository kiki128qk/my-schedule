CREATE TABLE `schedule_progress` (
  `sch_num` int(11) NOT NULL COMMENT '고유번호',
  `sch_db` int(11) NOT NULL,
  `sch_api` int(11) NOT NULL,
  `sch_ren` int(11) NOT NULL,
  `sch_pla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `schedule_progress`
--

INSERT INTO `schedule_progress` (`sch_num`, `sch_db`, `sch_api`, `sch_ren`, `sch_pla`) VALUES
(1, 90, 40, 20, 50);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `schedule_progress`
--
ALTER TABLE `schedule_progress`
  ADD PRIMARY KEY (`sch_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `schedule_progress`
--
ALTER TABLE `schedule_progress`
  MODIFY `sch_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=3;
COMMIT;