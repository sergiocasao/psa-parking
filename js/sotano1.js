
jQuery(function($){


var rsr = Raphael('rsr', '841.9', '595.3');

var rsrGroups = [];


//Empiezan planos de fondo

var PLANO_PRINCIPAL_S1 = rsr.path("M166.6,59.1C132.4,120.8,98,182.7,63.7,244.4  c-3.5,7.7-10.8,26.2-8,50.2c2.7,23.5,13.6,39.5,18.7,46.2c74.9,0,149.8,0,224.7,0v98.8h96.5v21.8h136.3v-25.2h119.4V468H664v-22.6  l116-0.1c14.5,0.4,21.7-5.3,24-7.4c10.7-9.8,10.9-27.5,11-38.1c0,0,0,0,0-15.5c0-4.3,0-8.7,0-13.1c0-11.4,0-17.2,0-17.3  c0-13.5-0.1-14.4-0.1-23.9c0-6,0.1-6.7,0-10.7c0-6.3-0.1-7.7-0.2-16.2c-0.1-4.9-0.1-6.2-0.1-9.5c0-2.9-0.1-4.6-0.1-6.4  c-0.1-3.8-0.1-6.7-0.1-11.4c0-5,0-6.7,0-15.7c0-10.8,0-16.3,0-18.3c0-13.2,0.1-13.9,0-14.2c0,0,0,0,0-0.1  c-2.7-15-10.9-23.8-10.9-23.8c-9.1-9.1-22.3-10.2-30.3-10.7c-1.8-0.1-8.8-0.1-22.7-0.1c-0.8,0-3.9,0-7.9,0c-3.9,0-6.8,0-7,0  c-4.6,0-93.2,0.4-303.7,1.4c0-20.3,0-40.5,0-60.8c-42.3,0-84.5,0.1-126.7,0.1c0-24.8,0.1-49.6,0.1-74.5  C259.2,59.1,212.9,59.1,166.6,59.1z");
PLANO_PRINCIPAL_S1.attr({fill: '#ffffff',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qv');

//Planos generales

var path_px = rsr.path("M299.2,340.9h5.7v57.4c42.4,0.1,85,0.2,127.4,0.3  c0.1,19.9,0.2,39.9,0.2,59.8c-6.1,0-12.3,0.1-18.4,0.1c0-6.3,0-12.6,0-18.9c6.1-0.1,12.1-0.1,18.3-0.1c0-1.4,0-2.8,0-4.3  c-42.4-0.1-85-0.2-127.4-0.2c0-12.2,0-24.4,0-36.6");
path_px.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_px');

var rect_qa = rsr.rect(155.1, 217.6, 63.1, 37.4);
rect_qa.attr({x: '155.1',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qa');

var path_qb = rsr.path("M157.2,158.6h59.4V195H155c0-4.3,0-7.9,0-10.6c0.1-7.7,0.1-4,0.1-11.1  c0.1-4.2,0-5.9,0.4-8.5C156.1,162.1,156.7,160,157.2,158.6z");
path_qb.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qb');

var path_qe = rsr.path("M514.3,461.4c-0.1,2.1-0.1,5.1,0,8.6c0.1,4.3,0.2,9.8,0.6,13.1  c0.9,10.6,4.5,19.6,5.4,21.9c9.7,24.1,31.7,36.9,32.7,37.5c14.5,8.2,28.3,9.4,35.7,9.5c8.9,0.4,21.6-0.6,34.7-7.1  c27.7-13.7,37-41.6,38.6-50.1c0.9-5.1,1.5-11.5,1.5-11.5c0.6-6.3,0.6-11.6,0.6-15.3");
path_qe.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qe');

var ellipse_qc = rsr.ellipse(589.8, 477.2, 36.6, 37.4);
ellipse_qc.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'ellipse_qc');

var circle_qd = rsr.circle(589, 476, 12);
circle_qd.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'circle_qd');

var path_qr = rsr.path("M97.5,319.9H79.3v21h18.2v-25.8h19.7v-37.3H97.5v-26.4l18.9-0.1  c-0.1-25-0.2-49.9-0.2-74.9c-0.1-7.4,0.7-17.2,3.8-28.2c1.9-6.6,4.2-12.2,6.5-16.9");
path_qr.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qr');

var rect_qx = rsr.rect(686.2, 435.5, 49.7, 9.8);
rect_qx.attr({x: '686.2',y: '435.5',fill: '#FFFFFF',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qx');

var path_cp = rsr.path("M49.4,350.2c-4-10-8-19.9-11.9-29.8c-1-2.7-2.4-6.5-3.7-11.2  c-0.9-3.2-4.5-15.9-5.2-26.9c-1.1-16.8,4.3-32.1,9-41.8L138.9,59.1h27.8v17.6h138.7V59.1c-46.2,0-92.5,0.1-138.7,0.1");
path_cp.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cp');

var path_cq = rsr.path("M178.8,100.9c12.2,0,24.4-0.1,36.6-0.1c2.4-0.1,4,1.9,3.8,3.6  c-0.2,1.5-1.7,2.8-3.7,2.8c-12.1,0-24.3,0-36.4,0c-2,0.1-3.5-1.5-3.5-3.2C175.6,102.2,177,100.9,178.8,100.9z");
path_cq.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cq');

var path_cr = rsr.path("M145.4,126.4c-4,4.5-9.6,12.1-13.1,22.6c-3,9.1-3.1,16.6-3.1,20.8  c-0.1,35.6,0.8,78.1,0.9,81.7h2.7c-1.2-36.8-1.4-65.4-1.1-81.7c0.1-4.4,0.3-12.3,3.8-21.7c3.4-9.2,8.4-15.7,11.9-19.7  C146.7,127.7,146.1,127,145.4,126.4z");
path_cr.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cr');

var path_cs = rsr.path("M155.3,251.7c-0.4-43.9-0.3-75.9,0-82.6c0.2-5.4,1.2-8.3,2-10.5  c0.6-1.6,1.4-3.2,3.1-6.2c2.5-4.7,2.7-4.8,4.8-8.5c1.4-2.4,3.3-5.8,5.5-10c0.4-0.9,1.5-2.7,3.8-4.1s4.5-1.5,5.7-1.5  c8.1-0.4,12.6,0,17.6-0.2c4.6-0.2,9.3,0.2,13.9-0.1c0.6-0.1,3-0.2,4.9,1.2c0.4,0.3,1.4,1.1,1.6,2.2c0,0,0.2,1.2-0.6,2.2  c-1.3,1.9-4.8,1.8-6.6,1.7c-4.4-0.1-8.8,0.3-13.2,0.1c-4.1-0.2-8.5-0.1-17.2,0c-4.7,0.1-8.5,0.2-11,0.3");
path_cs.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_cs');


// !--Planos generales

//Cuadros fondo estacionamientos

var rect_qp = rsr.rect(97.5, 277.9, 19.7, 37.3);
rect_qp.attr({x: '97.5',y: '277.9',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qp');

var rect_qq = rsr.rect(63.1, 251.5, 34.3, 26.4);
rect_qq.attr({x: '63.1',y: '251.5',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qq');

var path_py = rsr.path("M304.8,340.9h127.7v34.6H323c0-11.5,0-23,0-34.5");
path_py.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_py');

var rect_pz = rsr.rect(135.7, 279, 82.4, 35.1);
rect_pz.attr({x: '135.7',y: '279',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pz');

var path_qf = rsr.path("M305.2,159.6c0,12.3,0,24.6,0,36.9c35.6,0,71.3-0.1,106.9-0.1  c0-12.3,0-24.6,0-36.9C376.5,159.5,340.9,159.6,305.2,159.6z");
path_qf.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qf');

var path_qg = rsr.path("M305.2,218.1c0,12.8,0,25.6,0,38.4H432c0-12.8,0-25.6-0.1-38.4  C389.8,218.1,347.5,218.1,305.2,218.1z");
path_qg.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qg');

var rect_qh = rsr.rect(305.4, 279.1, 126.7, 36.7);
rect_qh.attr({x: '305.4',y: '279.1',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qh');

var rect_qi = rsr.rect(518.9, 220.2, 151.2, 36.3);
rect_qi.attr({x: '518.9',y: '220.2',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qi');

var rect_qj = rsr.rect(518.9, 279.1, 151.2, 36.7);
rect_qj.attr({x: '518.9',y: '279.1',fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_qj');

var path_qk = rsr.path("M518.9,340v36.3c50.4,0.1,100.8,0.1,151.2,0.1c0-12.1,0-24.2,0-36.3  C619.7,340,569.4,340,518.9,340z");
path_qk.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qk');

var path_ql = rsr.path("M 518.9,398.7 518.9,436.2 670.1,436.2 670.1,398.7  z");
path_ql.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_ql');

var path_qm = rsr.path("M753.1,220.5v37.6c13.7,0,27.5,0,41.2,0c0-6.2,0-12.5,0.1-18.8  c-3.5,0-6.9,0-10.3,0c0-6.2,0-12.5,0-18.7C773.7,220.5,763.4,220.5,753.1,220.5z");
path_qm.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qm');

var path_qn = rsr.path("M794.3,277.3c-13.6,0-27.3,0-40.9,0V314c20.4,0,40.9-0.1,61.3-0.1  c0-6.1-0.1-12.1-0.1-18.2c-6.8,0-13.6,0-20.4,0C794.3,289.6,794.3,283.5,794.3,277.3z");
path_qn.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qn');

var path_qo = rsr.path("M794.9,376.4c-13.4,0-26.7,0-40.1-0.1v-35.7c20,0,40,0,60.1,0  c0,5.9,0.1,11.9,0.1,17.9c-6.7,0-13.3,0-20,0C794.9,364.5,794.9,370.4,794.9,376.4z");
path_qo.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qo');

var path_qu = rsr.path("M755.2,397.7c0,6.6,0.1,13.2,0.1,19.9c9.8,0,19.5,0.1,29.3,0.1  c0-1.1,0-2.1,0-3.2c3.2,0,6.5,0,9.7,0c0-5.6,0-11.2,0-16.8C781.3,397.6,768.3,397.6,755.2,397.7z");
path_qu.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qu');

// !-- Cuadros fondo estacionamientos

//Escaleras

var path_ps = rsr.path("M670.2,445.4c0-3.1,0-6.1-0.1-9.2c-6.2,0-12.5,0-18.7,0v31.7H664  v-22.6L670.2,445.4z");
path_ps.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_ps');
var path_pw = rsr.path("M 395.7,439.7 395.7,435.2 #F3F3F335.2 402.5,461.5   395.7,461.5  z");
path_pw.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pw');

// !--Escaleras

//Bicis

var rect_pt = rsr.rect(518.9, 436.2, 12.9, 25.2);
rect_pt.attr({x: '518.9',y: '436.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pt');

// !--Bicis

//Rampas

var RAMPA_S2_A_S1 = rsr.path("M815,399.8c0,1.2,0,3,0,5.2c-0.3,8.4-0.7,18.2-6.4,27.1  c-1.4,2.1-4.1,6.2-9,9c-2.6,1.5-5.2,2.3-6.6,2.7c-2.1,0.6-3.9,0.8-6.4,1c-5.4,0.5-9.4,0.4-14.8,0.4c-2.2,0-5.6,0-9.8,0.1  c0-6.5,0-13,0-19.4c4.8,0.1,8.8-0.1,11.9-0.3c11-0.7,13.9-2,16-3.7c1.1-0.9,3.1-2.5,4-5.2c0.6-1.5,0.6-3.2,0.7-6.6  c0-0.7,0-0.8,0-5.1c0-1.4,0-2.2,0-2.9c0-2.2,0-8.7-0.1-24.4c6.8,0,13.7,0,20.5,0C815,385.1,815,392.4,815,399.8z");
RAMPA_S2_A_S1.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pv');

var RAMPA_S1_A_S2 = rsr.path("M794.3,295.8c6.8,0,13.6,0,20.4,0l-0.1-68.3  c-1.3-7-3.6-12.3-5.4-15.7c-2.8-5.4-5.2-7.8-5.8-8.4c-0.6-0.6-3.5-3.4-8-5.6c-2.4-1.2-4.7-1.9-5.8-2.2c-1.8-0.5-3.1-0.8-4.1-1  c-3.2-0.7-5.6-0.9-7.7-1.1c-1.1-0.1-2.6-0.2-4.4-0.3c0,6.8,0,13.6,0,20.4c1.4-0.1,8.6-0.3,14.5,5c0.3,0.2,6.1,5.6,6.4,12.2  c0,0.1,0,0,0,3.5c0,2.5,0,5.1,0,7.7c0,2.9,0,5.9,0,8.8c0,0.4,0,8.4,0,8.4c0,6.1,0,12.2,0,18.3C794.3,283.5,794.3,289.6,794.3,295.8z  ");
RAMPA_S1_A_S2.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qy');

// !--Rampas

// Terminan planos de fondo --------------------------------------------------------------------------------

var CP_1 = rsr.rect(79.3, 330.2, 18.2, 10.1);
CP_1.attr({x: '79.3',y: '330.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'cp_1');

var CP_2 = rsr.rect(79.3, 319.9, 18.2, 10.3);
CP_2.attr({x: '79.3',y: '319.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bg');

var CP_3 = rsr.rect(97.5, 298.1, 9.9, 17);
CP_3.attr({x: '97.5',y: '298.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_be');

var CP_4 = rsr.rect(107.4, 298.1, 9.9, 17);
CP_4.attr({x: '107.4',y: '298.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bf');

var CP_5 = rsr.rect(135.7, 296.5, 10.3, 17.6);
CP_5.attr({x: '135.7',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_an');

var CP_6 = rsr.rect(146, 296.5, 10.3, 17.6);
CP_6.attr({x: '146',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ap');

var CP_7 = rsr.rect(156.4, 296.5, 10.3, 17.6);
CP_7.attr({x: '156.4',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ar');

var CP_8 = rsr.rect(166.8, 296.5, 10.3, 17.6);
CP_8.attr({x: '166.8',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_at');

var CP_9 = rsr.rect(177.1, 296.5, 10.3, 17.6);
CP_9.attr({x: '177.1',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_av');

var CP_10 = rsr.rect(187.4, 296.5, 10.3, 17.6);
CP_10.attr({x: '187.4',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ax');

var CP_11 = rsr.rect(197.8, 296.5, 10.3, 17.6);
CP_11.attr({x: '197.8',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_az');

var CP_12 = rsr.rect(208.2, 296.5, 10, 17.6);
CP_12.attr({x: '208.2',y: '296.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bb');

var CP_13 = rsr.rect(97.5, 277.9, 9.9, 20.2);
CP_13.attr({x: '97.5',y: '277.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bd');

var CP_14 = rsr.rect(107.4, 277.9, 9.9, 20.2);
CP_14.attr({x: '107.4',y: '277.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bc');

var CP_15 = rsr.rect(135.7, 279, 10.3, 17.6);
CP_15.attr({x: '135.7',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_am');

var CP_16 = rsr.rect(146, 279, 10.3, 17.6);
CP_16.attr({x: '146',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ao');

var CP_17 = rsr.rect(156.4, 279, 10.3, 17.6);
CP_17.attr({x: '156.4',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_aq');

var CP_18 = rsr.rect(166.8, 279, 10.3, 17.6);
CP_18.attr({x: '166.8',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_as');

var CP_19 = rsr.rect(177.1, 279, 10.3, 17.6);
CP_19.attr({x: '177.1',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_au');

var CP_20 = rsr.rect(187.4, 279, 10.3, 17.6);
CP_20.attr({x: '187.4',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_aw');

var CP_21 = rsr.rect(197.8, 279, 10.3, 17.6);
CP_21.attr({x: '197.8',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ay');

var CP_22 = rsr.rect(208.2, 279, 10, 17.6);
CP_22.attr({x: '208.2',y: '279',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ba');

var CP_23 = rsr.rect(157.2, 236.3, 10.1, 18.7);
CP_23.attr({x: '157.2',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ab');

var CP_24 = rsr.rect(167.4, 236.3, 10.1, 18.7);
CP_24.attr({x: '167.4',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ad');

var CP_25 = rsr.rect(177.6, 236.3, 10.1, 18.7);
CP_25.attr({x: '177.6',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_af');

var CP_26 = rsr.rect(187.7, 236.3, 10.1, 18.7);
CP_26.attr({x: '187.7',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ah');

var CP_27 = rsr.rect(197.9, 236.3, 10.1, 18.7);
CP_27.attr({x: '197.9',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_aj');

var CP_28 = rsr.rect(208.1, 236.3, 10, 18.7);
CP_28.attr({x: '208.1',y: '236.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_al');

var CP_29 = rsr.rect(157.2, 217.6, 10.1, 18.7);
CP_29.attr({x: '157.2',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_a');

var CP_30 = rsr.rect(167.4, 217.6, 10.1, 18.7);
CP_30.attr({x: '167.4',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ac');

var CP_31 = rsr.rect(177.6, 217.6, 10.1, 18.7);
CP_31.attr({x: '177.6',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ae');

var CP_32 = rsr.rect(187.7, 217.6, 10.1, 18.7);
CP_32.attr({x: '187.7',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ag');

var CP_33 = rsr.rect(197.9, 217.6, 10.1, 18.7);
CP_33.attr({x: '197.9',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ai');

var CP_34 = rsr.rect(208.1, 217.6, 10, 18.7);
CP_34.attr({x: '208.1',y: '217.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ak');

var CP_35 = rsr.rect(157.2, 176.8, 9.9, 18.2);
CP_35.attr({x: '157.2',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_q');

var CP_36 = rsr.rect(167.1, 176.8, 9.9, 18.2);
CP_36.attr({x: '167.1',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_s');

var CP_37 = rsr.rect(177, 176.8, 9.9, 18.2);
CP_37.attr({x: '177',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_u');

var CP_38 = rsr.rect(187, 176.8, 9.9, 18.2);
CP_38.attr({x: '187',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_w');

var CP_39 = rsr.rect(196.9, 176.8, 9.9, 18.2);
CP_39.attr({x: '196.9',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_y');

var CP_40 = rsr.rect(206.8, 176.8, 9.9, 18.2);
CP_40.attr({x: '206.8',y: '176.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_aa');

var CP_41 = rsr.rect(157.2, 158.6, 9.9, 18.2);
CP_41.attr({x: '157.2',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_b');
rsrGroups.push(CP_41);

var CP_42 = rsr.rect(167.1, 158.6, 9.9, 18.2);
CP_42.attr({x: '167.1',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_r');

var CP_43 = rsr.rect(177, 158.6, 9.9, 18.2);
CP_43.attr({x: '177',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_t');

var CP_44 = rsr.rect(187, 158.6, 9.9, 18.2);
CP_44.attr({x: '187',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_v');

var CP_45 = rsr.rect(196.9, 158.6, 9.9, 18.2);
CP_45.attr({x: '196.9',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_x');

var CP_46 = rsr.rect(206.8, 158.6, 9.9, 18.2);
CP_46.attr({x: '206.8',y: '158.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_z');

var CP_47 = rsr.rect(166.6, 59.1, 10.1, 17.6);
CP_47.attr({x: '166.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_c');

var CP_48 = rsr.rect(176.8, 59.1, 9.9, 17.6);
CP_48.attr({x: '176.8',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_d');

var CP_49 = rsr.rect(186.7, 59.1, 9.9, 17.6);
CP_49.attr({x: '186.7',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_e');

var CP_50 = rsr.rect(196.6, 59.1, 9.9, 17.6);
CP_50.attr({x: '196.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_f');

var CP_51 = rsr.rect(206.5, 59.1, 9.9, 17.6);
CP_51.attr({x: '206.5',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_g');

var CP_52 = rsr.rect(216.4, 59.1, 9.9, 17.6);
CP_52.attr({x: '216.4',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_h');

var CP_53 = rsr.rect(226.3, 59.1, 9.9, 17.6);
CP_53.attr({x: '226.3',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_i');

var CP_54 = rsr.rect(236.2, 59.1, 9.9, 17.6);
CP_54.attr({x: '236.2',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_j');

var CP_55 = rsr.rect(246.1, 59.1, 9.9, 17.6);
CP_55.attr({x: '246.1',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_k');

var CP_56 = rsr.rect(256, 59.1, 9.9, 17.6);
CP_56.attr({x: '256',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_l');

var CP_57 = rsr.rect(265.9, 59.1, 9.9, 17.6);
CP_57.attr({x: '265.9',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_m');

var CP_58 = rsr.rect(275.8, 59.1, 9.9, 17.6);
CP_58.attr({x: '275.8',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_n');

var CP_59 = rsr.rect(285.6, 59.1, 9.9, 17.6);
CP_59.attr({x: '285.6',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_o');

var CP_60 = rsr.rect(295.5, 59.1, 9.8, 17.6);
CP_60.attr({x: '295.5',y: '59.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_p');

var CP_61 = rsr.rect(63.1, 269.1, 17.6, 8.8);
CP_61.attr({x: '63.1',y: '269.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bn');

var CP_62= rsr.rect(80.7, 268.9, 16.8, 9);
CP_62.attr({x: '80.7',y: '268.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bl');

var CP_63 = rsr.rect(63.1, 260.4, 17.6, 8.5);
CP_63.attr({x: '63.1',y: '260.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bm');

var CP_64 = rsr.rect(80.7, 260.4, 16.8, 8.5);
CP_64.attr({x: '80.7',y: '260.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bk');

var CP_65 = rsr.rect(63.1, 251.5, 17.6, 8.8);
CP_65.attr({x: '63.1',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bi');

var CP_66 = rsr.rect(80.7, 251.5, 16.8, 8.8);
CP_66.attr({x: '80.7',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bj');

// Faltan 67 68 69

var CP_70 = rsr.rect(236.9, 303.6, 16.5, 10.3);
CP_70.attr({x: '236.9',y: '303.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bo');

var CP_71 = rsr.rect(236.9, 293.3, 16.5, 10.3);
CP_71.attr({x: '236.9',y: '293.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bv');

var CP_72 = rsr.rect(236.9, 272.7, 19.5, 20.6);
CP_72.attr({x: '236.9',y: '272.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ch');

var CP_73 = rsr.rect(236.9, 262.4, 19.5, 10.3);
CP_73.attr({x: '236.9',y: '262.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bx');

var CP_74 = rsr.rect(236.9, 252.2, 19.5, 10.3);
CP_74.attr({x: '236.9',y: '252.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bz');

var CP_75 = rsr.rect(236.9, 241.8, 16.5, 10.3);
CP_75.attr({x: '236.9',y: '241.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cb');

var CP_76= rsr.rect(236.9, 231.7, 16.5, 10.1);
CP_76.attr({x: '236.9',y: '231.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cd');

var CP_77 = rsr.rect(269.8, 303.6, 16.4, 10.3);
CP_77.attr({x: '269.8',y: '303.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bp');

var CP_78 = rsr.rect(269.2, 102.7, 16.6, 11.1);
CP_78.attr({x: '269.2',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_br');

var CP_79 = rsr.rect(236.6, 142.5, 19.6, 20.6);
CP_79.attr({x: '236.6',y: '142.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ci');

var CP_80 = rsr.rect(236.6, 124.7, 19.7, 17.8);
CP_80.attr({x: '236.6',y: '124.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ck');

var CP_81 = rsr.rect(236.6, 113.7, 16.3, 11.1);
CP_81.attr({x: '236.6',y: '113.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bu');

var CP_82 = rsr.rect(236.6, 102.7, 16.3, 11.1);
CP_82.attr({x: '236.6',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bq');

var cp_83 = rsr.rect(253.3, 294.8, 16.5, 19.2);
cp_83.attr({x: '253.3',y: '294.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_co');

var CP_84 = rsr.rect(269.8, 293.3, 16.4, 10.3);
CP_84.attr({x: '269.8',y: '293.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bw');

var CP_85 = rsr.rect(266.7, 272.7, 19.5, 20.6);
CP_85.attr({x: '266.7',y: '272.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cn');

var CP_86 = rsr.rect(266.7, 262.4, 19.4, 10.3);
CP_86.attr({x: '266.7',y: '262.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_by');

var CP_87 = rsr.rect(266.7, 252.2, 19.4, 10.3);
CP_87.attr({x: '266.7',y: '252.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ca');

var CP_88 = rsr.rect(269.5, 241.8, 16.5, 10.3);
CP_88.attr({x: '269.5',y: '241.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cc');

var CP_89 = rsr.rect(269.5, 231.7, 16.5, 10.1);
CP_89.attr({x: '269.5',y: '231.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cg');

var CP_90 = rsr.rect(269.4, 172.3, 16.6, 9.2);
CP_90.attr({x: '269.4',y: '172.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cf');

var CP_91 = rsr.rect(269.4, 163.1, 16.6, 9.2);
CP_91.attr({x: '269.4',y: '163.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ce');

var CP_92 = rsr.rect(266.2, 142.5, 19.7, 20.6);
CP_92.attr({x: '266.2',y: '142.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cj');

var CP_93 = rsr.rect(266.2, 124.7, 19.7, 17.8);
CP_93.attr({x: '266.2',y: '124.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cl');

var CP_94 = rsr.rect(269.2, 113.7, 16.6, 11.1);
CP_94.attr({x: '269.2',y: '113.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bs');

var CP_95 = rsr.rect(252.9, 102.7, 16.3, 19.7);
CP_95.attr({x: '252.9',y: '102.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_bt');
//AQUI
var CP_96 = rsr.rect(304.9, 416.8, 9.8, 18.3);
CP_96.attr({x: '304.9',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_np');

var CP_97 = rsr.rect(314.7, 416.8, 9.8, 18.3);
CP_97.attr({x: '314.7',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nr');

var CP_98 = rsr.rect(324.5, 416.8, 9.8, 18.3);
CP_98.attr({x: '324.5',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nt');

var CP_99 = rsr.rect(334.3, 416.8, 9.8, 18.3);
CP_99.attr({x: '334.3',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nv');

var CP_100 = rsr.rect(344.1, 416.8, 9.8, 18.3);
CP_100.attr({x: '344.1',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nx');

var CP_101 = rsr.rect(354, 416.8, 9.8, 18.3);
CP_101.attr({x: '354',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nz');

var CP_102 = rsr.rect(363.7, 416.8, 9.8, 18.3);
CP_102.attr({x: '363.7',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ob');

var CP_103 = rsr.rect(373.6, 416.8, 9.8, 18.3);
CP_103.attr({x: '373.6',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_od');

var CP_104 = rsr.rect(383.3, 416.8, 9.8, 18.3);
CP_104.attr({x: '383.3',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_of');

var CP_105 = rsr.rect(393.2, 416.8, 9.8, 18.3);
CP_105.attr({x: '393.2',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oh');

var CP_106 = rsr.rect(403, 416.8, 9.8, 18.3);
CP_106.attr({x: '403',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oj');

var CP_107 = rsr.rect(412.8, 416.8, 9.8, 18.3);
CP_107.attr({x: '412.8',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ol');

var CP_108 = rsr.rect(422.6, 416.8, 9.8, 18.3);
CP_108.attr({x: '422.6',y: '416.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_on');

var CP_109 = rsr.rect(304.9, 398.3, 9.8, 18.3);
CP_109.attr({x: '304.9',y: '398.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nq');

var CP_110 = rsr.rect(314.7, 398.4, 9.8, 18.3);
CP_110.attr({x: '314.7',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ns');

var CP_111 = rsr.rect(324.5, 398.4, 9.8, 18.3);
CP_111.attr({x: '324.5',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nu');

var CP_112 = rsr.rect(334.3, 398.4, 9.8, 18.3);
CP_112.attr({x: '334.3',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nw');

var CP_113 = rsr.rect(344.1, 398.4, 9.8, 18.3);
CP_113.attr({x: '344.1',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ny');

var CP_114 = rsr.rect(354, 398.4, 9.8, 18.3);
CP_114.attr({x: '354',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oa');

var CP_115 = rsr.rect(363.7, 398.4, 9.8, 18.3);
CP_115.attr({x: '363.7',y: '398.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oc');

var CP_116 = rsr.rect(373.6, 398.5, 9.8, 18.3);
CP_116.attr({x: '373.6',y: '398.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oe');

var CP_117 = rsr.rect(383.3, 398.6, 9.8, 18.3);
CP_117.attr({x: '383.3',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_og');

var CP_118 = rsr.rect(393.2, 398.6, 9.8, 18.3);
CP_118.attr({x: '393.2',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oi');

var CP_119 = rsr.rect(403, 398.6, 9.8, 18.3);
CP_119.attr({x: '403',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ok');

var CP_120 = rsr.rect(412.8, 398.6, 9.8, 18.3);
CP_120.attr({x: '412.8',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_om');

var CP_121 = rsr.rect(422.6, 398.6, 9.8, 18.3);
CP_121.attr({x: '422.6',y: '398.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oq');

var CP_122 = rsr.rect(323, 358.2, 10, 17.3);
CP_122.attr({x: '323',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cz');

var CP_123 = rsr.rect(332.9, 358.2, 10, 17.3);
CP_123.attr({x: '332.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_db');

var CP_124 = rsr.rect(342.9, 358.2, 10, 17.3);
CP_124.attr({x: '342.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dd');

var CP_125 = rsr.rect(352.8, 358.2, 10, 17.3);
CP_125.attr({x: '352.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_df');

var CP_126 = rsr.rect(362.8, 358.2, 10, 17.3);
CP_126.attr({x: '362.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dj');

var CP_127 = rsr.rect(372.8, 358.2, 10, 17.3);
CP_127.attr({x: '372.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dl');

var CP_128 = rsr.rect(382.7, 358.2, 10, 17.3);
CP_128.attr({x: '382.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dn');

var CP_129 = rsr.rect(392.7, 358.2, 10, 17.3);
CP_129.attr({x: '392.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dp');

var CP_130 = rsr.rect(402.6, 358.2, 10, 17.3);
CP_130.attr({x: '402.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dr');

var CP_131 = rsr.rect(412.6, 358.2, 10, 17.3);
CP_131.attr({x: '412.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dt');

var CP_132 = rsr.rect(422.5, 358.2, 10, 17.3);
CP_132.attr({x: '422.5',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dv');

var CP_133 = rsr.rect(323, 340.9, 10, 17.3);
CP_133.attr({x: '323',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cy');

var CP_134 = rsr.rect(332.9, 340.9, 10, 17.3);
CP_134.attr({x: '332.9',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_da');

var CP_135 = rsr.rect(342.9, 340.9, 10, 17.3);
CP_135.attr({x: '342.9',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dc');

var CP_136 = rsr.rect(352.8, 340.9, 10, 17.3);
CP_136.attr({x: '352.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_de');

var CP_137 = rsr.rect(362.8, 340.9, 10, 17.3);
CP_137.attr({x: '362.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_di');

var CP_138 = rsr.rect(372.8, 340.9, 10, 17.3);
CP_138.attr({x: '372.8',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dk');

var CP_139 = rsr.rect(382.7, 340.9, 10, 17.3);
CP_139.attr({x: '382.7',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dm');

var CP_140 = rsr.rect(392.7, 340.9, 10, 17.3);
CP_140.attr({x: '392.7',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_do');

var CP_141 = rsr.rect(402.6, 340.9, 10, 17.3);
CP_141.attr({x: '402.6',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dq');

var CP_142 = rsr.rect(412.6, 340.9, 10, 17.3);
CP_142.attr({x: '412.6',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ds');

var CP_143 = rsr.rect(422.5, 340.9, 10, 17.3);
CP_143.attr({x: '422.5',y: '340.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_du');

var CP_144 = rsr.rect(305.4, 297.5, 9.8, 18.4);
CP_144.attr({x: '305.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cx');

var CP_145 = rsr.rect(315.2, 297.5, 9.8, 18.4);
CP_145.attr({x: '315.2',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dx');

var CP_146 = rsr.rect(324.9, 297.5, 9.8, 18.4);
CP_146.attr({x: '324.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dz');

var CP_147 = rsr.rect(334.7, 297.5, 9.8, 18.4);
CP_147.attr({x: '334.7',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eb');

var CP_148 = rsr.rect(344.4, 297.5, 9.8, 18.4);
CP_148.attr({x: '344.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ed');

var CP_149 = rsr.rect(354.1, 297.5, 9.8, 18.4);
CP_149.attr({x: '354.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ef');

var CP_150 = rsr.rect(363.9, 297.5, 9.8, 18.4);
CP_150.attr({x: '363.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eh');

var CP_151 = rsr.rect(373.6, 297.5, 9.8, 18.4);
CP_151.attr({x: '373.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ej');

var CP_152 = rsr.rect(383.4, 297.5, 9.8, 18.4);
CP_152.attr({x: '383.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_el');

var CP_153 = rsr.rect(393.1, 297.5, 9.8, 18.4);
CP_153.attr({x: '393.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_en');

var CP_154 = rsr.rect(402.9, 297.5, 9.8, 18.4);
CP_154.attr({x: '402.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ep');

var CP_155 = rsr.rect(412.6, 297.5, 9.8, 18.4);
CP_155.attr({x: '412.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_er');

var CP_156 = rsr.rect(422.4, 297.5, 9.7, 18.4);
CP_156.attr({x: '422.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_et');

var CP_157 = rsr.rect(305.4, 279.1, 9.8, 18.4);
CP_157.attr({x: '305.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cw');

var CP_158 = rsr.rect(315.2, 279.2, 9.8, 18.4);
CP_158.attr({x: '315.2',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dw');

var CP_159 = rsr.rect(324.9, 279.2, 9.8, 18.4);
CP_159.attr({x: '324.9',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dy');

var CP_160 = rsr.rect(334.7, 279.1, 9.8, 18.4);
CP_160.attr({x: '334.7',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ea');

var CP_161 = rsr.rect(344.4, 279.1, 9.8, 18.4);
CP_161.attr({x: '344.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ec');

var CP_162 = rsr.rect(354.1, 279.2, 9.8, 18.4);
CP_162.attr({x: '354.1',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ee');

var CP_163 = rsr.rect(363.9, 279.2, 9.8, 18.4);
CP_163.attr({x: '363.9',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eg');

var CP_164 = rsr.rect(373.6, 279.2, 9.8, 18.4);
CP_164.attr({x: '373.6',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ei');

var CP_165 = rsr.rect(383.4, 279.2, 9.8, 18.4);
CP_165.attr({x: '383.4',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ek');

var CP_166 = rsr.rect(393.1, 279.1, 9.8, 18.4);
CP_166.attr({x: '393.1',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_em');

var CP_167 = rsr.rect(402.9, 279.1, 9.8, 18.4);
CP_167.attr({x: '402.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eo');

var CP_168 = rsr.rect(412.6, 279.1, 9.8, 18.4);
CP_168.attr({x: '412.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eq');

var CP_169 = rsr.rect(422.4, 279.2, 9.7, 18.4);
CP_169.attr({x: '422.4',y: '279.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_es');

var CP_170 = rsr.rect(305.2, 237.2, 9.8, 19.2);
CP_170.attr({x: '305.2',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_eu');

var CP_171 = rsr.rect(315, 237.2, 9.8, 19.2);
CP_171.attr({x: '315',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ew');

var CP_172 = rsr.rect(324.7, 237.2, 9.8, 19.2);
CP_172.attr({x: '324.7',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ey');

var CP_173 = rsr.rect(334.5, 237.2, 9.8, 19.2);
CP_173.attr({x: '334.5',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fa');

var CP_174 = rsr.rect(344.2, 237.2, 9.8, 19.2);
CP_174.attr({x: '344.2',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fc');

var CP_175 = rsr.rect(354, 237.2, 9.8, 19.2);
CP_175.attr({x: '354',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fe');

var CP_176 = rsr.rect(363.8, 237.2, 9.8, 19.2);
CP_176.attr({x: '363.8',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fg');

var CP_177 = rsr.rect(373.5, 237.2, 9.8, 19.2);
CP_177.attr({x: '373.5',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fi');

var CP_178 = rsr.rect(383.3, 237.2, 9.8, 19.2);
CP_178.attr({x: '383.3',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fk');

var CP_179 = rsr.rect(393.1, 237.2, 9.8, 19.2);
CP_179.attr({x: '393.1',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fm');

var CP_180 = rsr.rect(402.8, 237.2, 9.8, 19.2);
CP_180.attr({x: '402.8',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fo');

var CP_181 = rsr.rect(412.6, 237.2, 9.8, 19.2);
CP_181.attr({x: '412.6',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fq');

var CP_182 = rsr.rect(422.3, 237.2, 9.8, 19.2);
CP_182.attr({x: '422.3',y: '237.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_no');

var CP_183 = rsr.rect(305.2, 218.1, 9.8, 19.2);
CP_183.attr({x: '305.2',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cv');

var CP_184 = rsr.rect(315, 218.1, 9.8, 19.2);
CP_184.attr({x: '315',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ev');

var CP_185 = rsr.rect(324.7, 218.1, 9.8, 19.2);
CP_185.attr({x: '324.7',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ex');

var CP_186 = rsr.rect(334.5, 218.1, 9.8, 19.2);
CP_186.attr({x: '334.5',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ez');

var CP_187 = rsr.rect(344.2, 218.1, 9.8, 19.2);
CP_187.attr({x: '344.2',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fb');

var CP_188 = rsr.rect(354, 218.1, 9.8, 19.2);
CP_188.attr({x: '354',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fd');

var CP_189 = rsr.rect(363.8, 218.1, 9.8, 19.2);
CP_189.attr({x: '363.8',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ff');

var CP_190 = rsr.rect(373.5, 218.1, 9.8, 19.2);
CP_190.attr({x: '373.5',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fh');

var CP_191 = rsr.rect(383.3, 218.1, 9.8, 19.2);
CP_191.attr({x: '383.3',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fj');

var CP_192 = rsr.rect(393.1, 218.1, 9.8, 19.2);
CP_192.attr({x: '393.1',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fl');

var CP_193 = rsr.rect(402.8, 218.1, 9.8, 19.2);
CP_193.attr({x: '402.8',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fn');

var CP_194 = rsr.rect(412.6, 218.1, 9.8, 19.2);
CP_194.attr({x: '412.6',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fp');

var CP_195 = rsr.rect(422.3, 218.1, 9.8, 19.2);
CP_195.attr({x: '422.3',y: '218.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fr');

var CP_196 = rsr.rect(305.2, 178, 9.7, 18.4);
CP_196.attr({x: '305.2',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_cu');

var CP_197 = rsr.rect(314.9, 178, 9.7, 18.4);
CP_197.attr({x: '314.9',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_os');

var CP_198 = rsr.rect(324.6, 178, 9.7, 18.4);
CP_198.attr({x: '324.6',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ou');

var CP_199 = rsr.rect(334.4, 178, 9.7, 18.4);
CP_199.attr({x: '334.4',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ow');

var CP_200 = rsr.rect(344.1, 178, 9.7, 18.4);
CP_200.attr({x: '344.1',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oy');

var CP_201 = rsr.rect(353.8, 178, 9.7, 18.4);
CP_201.attr({x: '353.8',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pa');

var CP_202 = rsr.rect(363.5, 178, 9.7, 18.4);
CP_202.attr({x: '363.5',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pc');

var CP_203 = rsr.rect(373.3, 178, 9.7, 18.4);
CP_203.attr({x: '373.3',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pe');

var CP_204 = rsr.rect(383, 178, 9.7, 18.4);
CP_204.attr({x: '383',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pg');

var CP_205 = rsr.rect(392.8, 178, 9.7, 18.4);
CP_205.attr({x: '392.8',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pi');

var CP_206 = rsr.rect(402.5, 178, 9.7, 18.4);
CP_206.attr({x: '402.5',y: '178',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pk');

var CP_207 = rsr.rect(305.2, 159.6, 9.7, 18.4);
CP_207.attr({x: '305.2',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ct');

var CP_208 = rsr.rect(314.9, 159.6, 9.7, 18.4);
CP_208.attr({x: '314.9',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_or');

var CP_209 = rsr.rect(324.6, 159.5, 9.7, 18.4);
CP_209.attr({x: '324.6',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ot');

var CP_210 = rsr.rect(334.4, 159.6, 9.7, 18.4);
CP_210.attr({x: '334.4',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ov');

var CP_211 = rsr.rect(344.1, 159.5, 9.7, 18.4);
CP_211.attr({x: '344.1',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ox');

var CP_212 = rsr.rect(353.8, 159.5, 9.7, 18.4);
CP_212.attr({x: '353.8',y: '159.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oz');

var CP_213 = rsr.rect(363.5, 159.6, 9.7, 18.4);
CP_213.attr({x: '363.5',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pb');

var CP_214 = rsr.rect(373.3, 159.6, 9.7, 18.4);
CP_214.attr({x: '373.3',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pd');

var CP_215 = rsr.rect(383, 159.6, 9.7, 18.4);
CP_215.attr({x: '383',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pf');

var CP_216 = rsr.rect(392.8, 159.6, 9.7, 18.4);
CP_216.attr({x: '392.8',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ph');

var CP_217 = rsr.rect(402.5, 159.6, 9.7, 18.4);
CP_217.attr({x: '402.5',y: '159.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_pj');

var CP_218 = rsr.rect(414.1, 448.9, 18.4, 9.5);
CP_218.attr({x: '414.1',y: '448.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_op');

var CP_219 = rsr.rect(414.1, 439.5, 18.4, 9.5);
CP_219.attr({x: '414.1',y: '439.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_oo');

var CP_220 = rsr.rect(450.5, 423.1, 17.3, 10);
CP_220.attr({x: '450.5',y: '423.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kz');

var CP_221 = rsr.rect(450.5, 413.1, 17.3, 10);
CP_221.attr({x: '450.5',y: '413.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kt');

var CP_222 = rsr.rect(450.5, 393.2, 19.7, 19.9);
CP_222.attr({x: '450.5',y: '393.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_la');

var CP_223 = rsr.rect(450.5, 383.3, 19.7, 10);
CP_223.attr({x: '450.5',y: '383.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ks');

var CP_224 = rsr.rect(450.5, 373.3, 19.7, 10);
CP_224.attr({x: '450.5',y: '373.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kr');

var CP_225 = rsr.rect(450.5, 363.4, 17.3, 10);
CP_225.attr({x: '450.5',y: '363.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kq');

var CP_226 = rsr.rect(450.5, 353.4, 17.3, 10);
CP_226.attr({x: '450.5',y: '353.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kp');

//Faltan 227 228 229

var CP_230 = rsr.rect(450.5, 251.3, 19.7, 10.3);
CP_230.attr({x: '450.5',y: '251.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lp');

var CP_231 = rsr.rect(450.5, 241, 19.7, 10.3);
CP_231.attr({x: '450.5',y: '241',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kl');

var CP_232 = rsr.rect(450.5, 230.6, 17.3, 10.3);
CP_232.attr({x: '450.5',y: '230.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kk');

var CP_233 = rsr.rect(450.5, 220.2, 17.3, 10.3);
CP_233.attr({x: '450.5',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kj');

var CP_234 = rsr.rect(467.8, 414.3, 15, 18.6);
CP_234.attr({x: '467.8',y: '414.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lc');

var CP_235A = rsr.rect(482.9, 423.1, 17.4, 10);
CP_235A.attr({x: '482.9',y: '423.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ky');

var CP_235B = rsr.rect(482.9, 413.1, 17.4, 10);
CP_235B.attr({x: '482.9',y: '413.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kx');

var CP_236 = rsr.rect(480.6, 393.2, 19.7, 19.9);
CP_236.attr({x: '480.6',y: '393.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lb');

var CP_237 = rsr.rect(480.6, 383.3, 19.7, 10);
CP_237.attr({x: '480.6',y: '383.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kw');

var CP_238 = rsr.rect(480.6, 373.3, 19.7, 10);
CP_238.attr({x: '480.6',y: '373.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kv');

var cp_239 = rsr.rect(482.9, 363.4, 17.4, 10);
cp_239.attr({x: '482.9',y: '363.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ku');

var CP_240 = rsr.rect(482.9, 353.4, 17.4, 10);
CP_240.attr({x: '482.9',y: '353.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ld');

var CP_241 = rsr.rect(482.9, 292.8, 17.3, 10.3);
CP_241.attr({x: '482.9',y: '292.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lo');

var CP_242 = rsr.rect(482.9, 282.4, 17.3, 10.3);
CP_242.attr({x: '482.9',y: '282.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ko');

var CP_243 = rsr.rect(480.5, 261.7, 19.7, 20.7);
CP_243.attr({x: '480.5',y: '261.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lr');

var CP_244 = rsr.rect(480.5, 251.3, 19.7, 10.3);
CP_244.attr({x: '480.5',y: '251.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kn');

var CP_245 = rsr.rect(480.5, 241, 19.7, 10.3);
CP_245.attr({x: '480.5',y: '241',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_km');

var CP_246 = rsr.rect(482.9, 230.6, 17.3, 10.3);
CP_246.attr({x: '482.9',y: '230.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lu');

var CP_247 = rsr.rect(482.9, 220.2, 17.3, 10.3);
CP_247.attr({x: '482.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lt');

var CP_248 = rsr.rect(470.1, 220.2, 10.3, 19.7);
CP_248.attr({x: '470.1',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fs');

var CP_249 = rsr.rect(518.9, 417.4, 10.1, 18.7);
CP_249.attr({x: '518.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hc');

var CP_250 = rsr.rect(529, 417.4, 10.1, 18.7);
CP_250.attr({x: '529',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_he');

var CP_251 = rsr.rect(539.1, 417.4, 10.1, 18.7);
CP_251.attr({x: '539.1',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hg');

var CP_252 = rsr.rect(549.2, 417.4, 10.1, 18.7);
CP_252.attr({x: '549.2',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hi');

var CP_253 = rsr.rect(559.3, 417.4, 10.1, 18.7);
CP_253.attr({x: '559.3',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hk');

var CP_254 = rsr.rect(569.4, 417.4, 10.1, 18.7);
CP_254.attr({x: '569.4',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hm');

var CP_255 = rsr.rect(579.4, 417.4, 10.1, 18.7);
CP_255.attr({x: '579.4',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ho');

var CP_256 = rsr.rect(589.5, 417.4, 10.1, 18.7);
CP_256.attr({x: '589.5',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hq');

var CP_257 = rsr.rect(599.6, 417.4, 10.1, 18.7);
CP_257.attr({x: '599.6',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hs');

var CP_258 = rsr.rect(609.6, 417.4, 10.1, 18.7);
CP_258.attr({x: '609.6',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hu');

var CP_259 = rsr.rect(619.7, 417.4, 10.1, 18.7);
CP_259.attr({x: '619.7',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hw');

var CP_260 = rsr.rect(629.8, 417.4, 10.1, 18.7);
CP_260.attr({x: '629.8',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hy');

var CP_261 = rsr.rect(639.9, 417.4, 10.1, 18.7);
CP_261.attr({x: '639.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ia');

var CP_262 = rsr.rect(649.9, 417.4, 10.1, 18.7);
CP_262.attr({x: '649.9',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ic');

var CP_263 = rsr.rect(660, 417.4, 10.1, 18.7);
CP_263.attr({x: '660',y: '417.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ie');

var CP_264 = rsr.rect(518.9, 398.7, 10.1, 18.7);
CP_264.attr({x: '518.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hb');

var CP_265 = rsr.rect(529, 398.7, 10.1, 18.7);
CP_265.attr({x: '529',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hd');

var CP_266 = rsr.rect(539.1, 398.7, 10.1, 18.7);
CP_266.attr({x: '539.1',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hf');

var CP_267 = rsr.rect(549.2, 398.7, 10.1, 18.7);
CP_267.attr({x: '549.2',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hh');

var CP_268 = rsr.rect(559.3, 398.7, 10.1, 18.7);
CP_268.attr({x: '559.3',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hj');

var CP_269 = rsr.rect(569.4, 398.7, 10.1, 18.7);
CP_269.attr({x: '569.4',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hl');

var CP_270 = rsr.rect(579.4, 398.7, 10.1, 18.7);
CP_270.attr({x: '579.4',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hn');

var CP_271 = rsr.rect(589.5, 398.7, 10.1, 18.7);
CP_271.attr({x: '589.5',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hp');

var CP_272 = rsr.rect(599.6, 398.7, 10.1, 18.7);
CP_272.attr({x: '599.6',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hr');

var CP_273 = rsr.rect(609.6, 398.7, 10.1, 18.7);
CP_273.attr({x: '609.6',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ht');

var CP_274 = rsr.rect(619.7, 398.7, 10.1, 18.7);
CP_274.attr({x: '619.7',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hv');

var CP_275 = rsr.rect(629.8, 398.7, 10.1, 18.7);
CP_275.attr({x: '629.8',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hx');

var CP_276 = rsr.rect(639.9, 398.7, 10.1, 18.7);
CP_276.attr({x: '639.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_hz');

var CP_277 = rsr.rect(649.9, 398.7, 10.1, 18.7);
CP_277.attr({x: '649.9',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ib');

var CP_278 = rsr.rect(660, 398.7, 10.1, 18.7);
CP_278.attr({x: '660',y: '398.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_id');

var CP_279 = rsr.rect(518.9, 358.2, 10.1, 18);
CP_279.attr({x: '518.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ha');

var CP_280 = rsr.rect(529, 358.2, 10.1, 18);
CP_280.attr({x: '529',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ig');

var CP_281 = rsr.rect(539.1, 358.2, 10.1, 18);
CP_281.attr({x: '539.1',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ii');

var CP_282 = rsr.rect(549.2, 358.2, 10.1, 18.1);
CP_282.attr({x: '549.2',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ik');

var CP_283 = rsr.rect(559.3, 358.2, 10.1, 18.1);
CP_283.attr({x: '559.3',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_im');

var CP_284 = rsr.rect(569.4, 358.2, 10.1, 18.1);
CP_284.attr({x: '569.4',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_io');

var CP_285 = rsr.rect(579.4, 358.2, 10.1, 18.1);
CP_285.attr({x: '579.4',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iq');

var CP_286 = rsr.rect(589.5, 358.2, 10.1, 18.1);
CP_286.attr({x: '589.5',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_is');

var CP_287 = rsr.rect(599.6, 358.2, 10.1, 18.1);
CP_287.attr({x: '599.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iu');

var CP_288 = rsr.rect(609.6, 358.2, 10.1, 18.1);
CP_288.attr({x: '609.6',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iw');

var CP_289 = rsr.rect(619.7, 358.2, 10.1, 18.1);
CP_289.attr({x: '619.7',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iy');

var CP_290 = rsr.rect(629.8, 358.2, 10.1, 18.1);
CP_290.attr({x: '629.8',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ja');

var CP_291 = rsr.rect(639.9, 358.2, 10.1, 18.1);
CP_291.attr({x: '639.9',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jc');

var CP_292 = rsr.rect(650, 358.2, 10.1, 18.1);
CP_292.attr({x: '650',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_je');

var CP_293 = rsr.rect(660, 358.2, 10.1, 18.1);
CP_293.attr({x: '660',y: '358.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jg');CP_280

var CP_294 = rsr.rect(518.9, 340, 10.1, 18.3);
CP_294.attr({x: '518.9',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gz');

var CP_295 = rsr.rect(529, 340, 10.1, 18.3);
CP_295.attr({x: '529',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_if');

var CP_296 = rsr.rect(539.1, 340, 10.1, 18.3);
CP_296.attr({x: '539.1',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ih');

var CP_297 = rsr.rect(549.2, 340, 10.1, 18.3);
CP_297.attr({x: '549.2',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ij');

var CP_298 = rsr.rect(559.3, 340, 10.1, 18.3);
CP_298.attr({x: '559.3',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_il');

var CP_299 = rsr.rect(569.4, 340, 10.1, 18.3);
CP_299.attr({x: '569.4',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_in');

var CP_300 = rsr.rect(579.4, 340, 10.1, 18.2);
CP_300.attr({x: '579.4',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ip');

var CP_301 = rsr.rect(589.5, 340, 10.1, 18.3);
CP_301.attr({x: '589.5',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ir');

var CP_302 = rsr.rect(599.6, 340, 10.1, 18.2);
CP_302.attr({x: '599.6',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_it');

var CP_303 = rsr.rect(609.6, 340, 10.1, 18.3);
CP_303.attr({x: '609.6',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iv');

var CP_304 = rsr.rect(619.7, 340, 10.1, 18.3);
CP_304.attr({x: '619.7',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ix');

var CP_305 = rsr.rect(629.8, 340, 10.1, 18.3);
CP_305.attr({x: '629.8',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_iz');

var CP_306 = rsr.rect(639.9, 340, 10.1, 18.3);
CP_306.attr({x: '639.9',y: '340',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jb');

var CP_307 = rsr.rect(650, 340.1, 10.1, 18.2);
CP_307.attr({x: '650',y: '340.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jd');

var CP_308 = rsr.rect(660, 340.1, 10.1, 18.2);
CP_308.attr({x: '660',y: '340.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jf');

var CP_309 = rsr.rect(518.9, 297.5, 10.1, 18.4);
CP_309.attr({x: '518.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fw');

var CP_310 = rsr.rect(529, 297.5, 10.1, 18.4);
CP_310.attr({x: '529',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fy');

var CP_311 = rsr.rect(539.1, 297.5, 10.1, 18.4);
CP_311.attr({x: '539.1',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ga');

var CP_312 = rsr.rect(549.2, 297.5, 10.1, 18.4);
CP_312.attr({x: '549.2',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gc');

var CP_313 = rsr.rect(559.3, 297.5, 10.1, 18.4);
CP_313.attr({x: '559.3',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ge');

var CP_314 = rsr.rect(569.4, 297.5, 10.1, 18.4);
CP_314.attr({x: '569.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gg');

var CP_315 = rsr.rect(579.4, 297.5, 10.1, 18.4);
CP_315.attr({x: '579.4',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gi');

var CP_316 = rsr.rect(589.5, 297.5, 10.1, 18.4);
CP_316.attr({x: '589.5',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gk');

var CP_317 = rsr.rect(599.6, 297.5, 10.1, 18.4);
CP_317.attr({x: '599.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gm');

var CP_318 = rsr.rect(609.6, 297.5, 10.1, 18.4);
CP_318.attr({x: '609.6',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_go');

var CP_319 = rsr.rect(619.7, 297.5, 10.1, 18.4);
CP_319.attr({x: '619.7',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gq');

var CP_320 = rsr.rect(629.8, 297.5, 10.1, 18.4);
CP_320.attr({x: '629.8',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gs');

var CP_321 = rsr.rect(639.9, 297.5, 10.1, 18.4);
CP_321.attr({x: '639.9',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gu');

var CP_322 = rsr.rect(650, 297.5, 10.1, 18.4);
CP_322.attr({x: '650',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gw');

var CP_323 = rsr.rect(660, 297.5, 10.1, 18.4);
CP_323.attr({x: '660',y: '297.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gy');

var CP_324 = rsr.rect(518.9, 279.1, 10.1, 18.4);
CP_324.attr({x: '518.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fv');

var CP_325 = rsr.rect(529, 279.1, 10.1, 18.4);
CP_325.attr({x: '529',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fx');

var CP_326 = rsr.rect(539.1, 279.1, 10.1, 18.4);
CP_326.attr({x: '539.1',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fz');

var CP_327 = rsr.rect(549.2, 279.1, 10.1, 18.4);
CP_327.attr({x: '549.2',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gb');

var CP_328 = rsr.rect(559.3, 279.1, 10.1, 18.4);
CP_328.attr({x: '559.3',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gd');

var CP_329 = rsr.rect(569.4, 279.1, 10.1, 18.4);
CP_329.attr({x: '569.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gf');

var CP_330 = rsr.rect(579.4, 279.1, 10.1, 18.4);
CP_330.attr({x: '579.4',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gh');

var CP_331 = rsr.rect(589.5, 279.1, 10.1, 18.4);
CP_331.attr({x: '589.5',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gj');

var CP_332 = rsr.rect(599.6, 279.1, 10.1, 18.4);
CP_332.attr({x: '599.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gl');

var CP_333 = rsr.rect(609.6, 279.1, 10.1, 18.4);
CP_333.attr({x: '609.6',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gn');

var CP_334 = rsr.rect(619.7, 279.1, 10.1, 18.4);
CP_334.attr({x: '619.7',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gp');

var CP_335 = rsr.rect(629.8, 279.1, 10.1, 18.4);
CP_335.attr({x: '629.8',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gr');

var CP_336 = rsr.rect(639.9, 279.1, 10.1, 18.4);
CP_336.attr({x: '639.9',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gt');

var CP_337 = rsr.rect(650, 279.1, 10.1, 18.4);
CP_337.attr({x: '650',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gv');

var CP_338 = rsr.rect(660, 279.1, 10.1, 18.4);
CP_338.attr({x: '660',y: '279.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_gx');

var CP_339 = rsr.rect(518.9, 238.4, 10.1, 18.1);
CP_339.attr({x: '518.9',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_fu');

var CP_340 = rsr.rect(529, 238.4, 10.1, 18.1);
CP_340.attr({x: '529',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ji');

var CP_341 = rsr.rect(539.1, 238.4, 10.1, 18.1);
CP_341.attr({x: '539.1',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jk');

var CP_342 = rsr.rect(549.2, 238.4, 10.1, 18.1);
CP_342.attr({x: '549.2',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jm');

var CP_343 = rsr.rect(559.3, 238.4, 10.1, 18.1);
CP_343.attr({x: '559.3',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jo');

var CP_344 = rsr.rect(569.4, 238.4, 10.1, 18.1);
CP_344.attr({x: '569.4',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jq');

var CP_345 = rsr.rect(579.4, 238.4, 10.1, 18.1);
CP_345.attr({x: '579.4',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_js');

var CP_346 = rsr.rect(589.5, 238.4, 10.1, 18.1);
CP_346.attr({x: '589.5',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ju');

var CP_347 = rsr.rect(599.6, 238.4, 10.1, 18.1);
CP_347.attr({x: '599.6',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jw');

var CP_348 = rsr.rect(609.6, 238.4, 10.1, 18.1);
CP_348.attr({x: '609.6',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jy');

var CP_349 = rsr.rect(619.7, 238.4, 10.1, 18.1);
CP_349.attr({x: '619.7',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ka');

var CP_350 = rsr.rect(629.8, 238.4, 10.1, 18.1);
CP_350.attr({x: '629.8',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kc');

var CP_351 = rsr.rect(639.9, 238.4, 10.1, 18.1);
CP_351.attr({x: '639.9',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ke');

var CP_352 = rsr.rect(650, 238.4, 10.1, 18.1);
CP_352.attr({x: '650',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kg');

var CP_353 = rsr.rect(660, 238.4, 10.1, 18.1);
CP_353.attr({x: '660',y: '238.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ki');

var CP_354 = rsr.rect(518.9, 220.2, 10.1, 18.1);
CP_354.attr({x: '518.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ft');

var CP_355 = rsr.rect(529, 220.2, 10.1, 18.1);
CP_355.attr({x: '529',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jh');

var CP_356 = rsr.rect(539.1, 220.2, 10.1, 18.1);
CP_356.attr({x: '539.1',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jj');

var CP_357 = rsr.rect(549.2, 220.2, 10.1, 18.1);
CP_357.attr({x: '549.2',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jl');

var CP_358 = rsr.rect(559.3, 220.2, 10.1, 18.1);
CP_358.attr({x: '559.3',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jn');

var CP_359 = rsr.rect(569.4, 220.2, 10.1, 18.1);
CP_359.attr({x: '569.4',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jp');

var CP_360 = rsr.rect(579.4, 220.2, 10.1, 18.1);
CP_360.attr({x: '579.4',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jr');

var CP_361 = rsr.rect(589.5, 220.2, 10.1, 18.1);
CP_361.attr({x: '589.5',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jt');

var CP_362 = rsr.rect(599.6, 220.2, 10.1, 18.1);
CP_362.attr({x: '599.6',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jv');

var CP_363 = rsr.rect(609.6, 220.2, 10.1, 18.1);
CP_363.attr({x: '609.6',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jx');

var CP_364 = rsr.rect(619.7, 220.2, 10.1, 18.1);
CP_364.attr({x: '619.7',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_jz');

var CP_365 = rsr.rect(629.8, 220.2, 10.1, 18.1);
CP_365.attr({x: '629.8',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kb');

var CP_366 = rsr.rect(639.9, 220.2, 10.1, 18.1);
CP_366.attr({x: '639.9',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kd');

var CP_367 = rsr.rect(650, 220.2, 10.1, 18.1);
CP_367.attr({x: '650',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kf');

var CP_368 = rsr.rect(660, 220.2, 10.1, 18.1);
CP_368.attr({x: '660',y: '220.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_kh');

var CP_369 = rsr.rect(686.2, 435.5, 17.3, 9.8);
CP_369.attr({x: '686.2',y: '435.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dg');

var CP_370 = rsr.rect(718.6, 435.5, 17.3, 9.8);
CP_370.attr({x: '718.6',y: '435.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_dh');

var CP_371 = rsr.rect(686.2, 393.5, 19.7, 19.9);
CP_371.attr({x: '686.2',y: '393.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ll');

var CP_372 = rsr.rect(686.2, 383.6, 19.7, 10);
CP_372.attr({x: '686.2',y: '383.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lh');

var CP_373 = rsr.rect(686.2, 373.6, 19.7, 10);
CP_373.attr({x: '686.2',y: '373.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lg');

var CP_374 = rsr.rect(686.2, 363.7, 17.3, 10);
CP_374.attr({x: '686.2',y: '363.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lf');

var CP_375 = rsr.rect(686.2, 353.7, 17.3, 10);
CP_375.attr({x: '686.2',y: '353.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_le');

// Faltan 376, 377, 378

var CP_379 = rsr.rect(686.2, 251.5, 19.7, 10.3);
CP_379.attr({x: '686.2',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ni');

var CP_380 = rsr.rect(686.2, 241.1, 19.7, 10.3);
CP_380.attr({x: '686.2',y: '241.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nd');

var CP_381 = rsr.rect(686.2, 230.7, 17.3, 10.3);
CP_381.attr({x: '686.2',y: '230.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nc');

var CP_382 = rsr.rect(686.2, 220.4, 17.3, 10.3);
CP_382.attr({x: '686.2',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nb');

var CP_383 = rsr.rect(705.9, 393.5, 10.3, 19.7);
CP_383.attr({x: '705.9',y: '393.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lv');

var CP_384 = rsr.rect(716.3, 403.6, 19.7, 10);
CP_384.attr({x: '716.3',y: '403.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');

var CP_385 = rsr.rect(716.3, 393.6, 19.7, 10);
CP_385.attr({x: '716.3',y: '393.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');

var CP_386 = rsr.rect(716.3, 383.6, 19.7, 10);
CP_386.attr({x: '716.3',y: '383.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lk');

var CP_387 = rsr.rect(716.3, 373.6, 19.7, 10);
CP_387.attr({x: '716.3',y: '373.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lj');

var CP_388 = rsr.rect(718.6, 363.7, 17.4, 10);
CP_388.attr({x: '718.6',y: '363.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_li');

var CP_389 = rsr.rect(718.6, 353.7, 17.4, 10);
CP_389.attr({x: '718.6',y: '353.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ln');

var CP_390 = rsr.rect(718.6, 292.9, 17.3, 10.3);
CP_390.attr({x: '718.6',y: '292.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nh');

var CP_391 = rsr.rect(718.6, 282.6, 17.3, 10.3);
CP_391.attr({x: '718.6',y: '282.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ng');

var CP_392 = rsr.rect(716.3, 261.9, 19.7, 20.7);
CP_392.attr({x: '716.3',y: '261.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nk');

var CP_393 = rsr.rect(716.3, 251.5, 19.7, 10.3);
CP_393.attr({x: '716.3',y: '251.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nf');

var CP_394 = rsr.rect(716.3, 241.1, 19.7, 10.3);
CP_394.attr({x: '716.3',y: '241.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ne');

var CP_395 = rsr.rect(718.6, 220.4, 17.3, 10.3);
CP_395.attr({x: '718.6',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nm');

var CP_396 = rsr.rect(718.6, 230.7, 17.3, 10.3);
CP_396.attr({x: '718.6',y: '230.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nn');

var CP_397 = rsr.rect(705.9, 220.4, 10.3, 19.7);
CP_397.attr({x: '705.9',y: '220.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lv');

var CP_398 = rsr.rect(755.3, 397.6, 9.8, 19.9);
CP_398.attr({x: '755.3',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mh');

var CP_399 = rsr.rect(765.1, 397.6, 9.8, 19.9);
CP_399.attr({x: '765.1',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mg');

var CP_400 = rsr.rect(774.8, 397.6, 9.8, 19.9);
CP_400.attr({x: '774.8',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mf');

var CP_401 = rsr.rect(784.6, 397.6, 9.8, 16.8);
CP_401.attr({x: '784.6',y: '397.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_me');

var CP_402 = rsr.rect(754.8, 358.5, 10, 17.9);
CP_402.attr({x: '754.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mo');

var CP_403 = rsr.rect(764.8, 358.5, 10, 17.9);
CP_403.attr({x: '764.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mn');

var CP_404 = rsr.rect(774.8, 358.5, 10, 17.9);
CP_404.attr({x: '774.8',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mm');

var CP_405 = rsr.rect(784.9, 358.5, 10, 17.9);
CP_405.attr({x: '784.9',y: '358.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ml');

var CP_406 = rsr.rect(754.8, 340.6, 10, 17.9);
CP_406.attr({x: '754.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mr');CP_409

var CP_407 = rsr.rect(764.8, 340.6, 10, 17.9);
CP_407.attr({x: '764.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mq');

var CP_408 = rsr.rect(774.8, 340.6, 10, 17.9);
CP_408.attr({x: '774.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mp');

var CP_409 = rsr.rect(784.9, 340.6, 10, 17.9);
CP_409.attr({x: '784.9',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mk');

var CP_410 = rsr.rect(794.8, 340.6, 10, 17.9);
CP_410.attr({x: '794.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mj');

var CP_411 = rsr.rect(804.8, 340.6, 10, 17.9);
CP_411.attr({x: '804.8',y: '340.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mi');

var CP_412 = rsr.rect(753.4, 295.7, 10.2, 18.3);
CP_412.attr({x: '753.4',y: '295.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mv');

var CP_413 = rsr.rect(763.7, 295.8, 10.2, 18.3);
CP_413.attr({x: '763.7',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mt');

var CP_414 = rsr.rect(773.9, 295.8, 10.2, 18.3);
CP_414.attr({x: '773.9',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_md');

var CP_415 = rsr.rect(784.1, 295.8, 10.2, 18.3);
CP_415.attr({x: '784.1',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mb');

var CP_416 = rsr.rect(794.3, 295.8, 10.2, 18.3);
CP_416.attr({x: '794.3',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ma');

var CP_417 = rsr.rect(804.5, 295.8, 10.2, 18.3);
CP_417.attr({x: '804.5',y: '295.8',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lz');

var CP_418 = rsr.rect(753.4, 277.3, 10.2, 18.3);
CP_418.attr({x: '753.4',y: '277.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mw');

var CP_419 = rsr.rect(763.7, 277.4, 10.2, 18.3);
CP_419.attr({x: '763.7',y: '277.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mu');

var CP_420 = rsr.rect(773.9, 277.4, 10.2, 18.3);
CP_420.attr({x: '773.9',y: '277.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ms');

var CP_421 = rsr.rect(784.1, 277.3, 10.2, 18.3);
CP_421.attr({x: '784.1',y: '277.3',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mc');

var CP_422 = rsr.rect(753.1, 239.2, 10.3, 18.8);
CP_422.attr({x: '753.1',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ly');

var CP_423 = rsr.rect(763.4, 239.2, 10.3, 18.8);
CP_423.attr({x: '763.4',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_my');

var CP_424 = rsr.rect(773.7, 239.2, 10.3, 18.8);
CP_424.attr({x: '773.7',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_na');

var CP_425 = rsr.rect(784, 239.2, 10.3, 18.8);
CP_425.attr({x: '784',y: '239.2',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lw');

var CP_426 = rsr.rect(753.1, 220.5, 10.3, 18.8);
CP_426.attr({x: '753.1',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lx');

var CP_427 = rsr.rect(763.4, 220.5, 10.3, 18.8);
CP_427.attr({x: '763.4',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mx');

var CP_428 = rsr.rect(773.7, 220.5, 10.3, 18.8);
CP_428.attr({x: '773.7',y: '220.5',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_mz');

//Terminan cajones

//Torre A

var TORRE_A = rsr.path("M236.7,181.2c0-26.2,0-52.4,0-78.6c16.4,0,32.8-0.1,49.2-0.1  c0.1,26.2,0.1,52.5,0.1,78.8h77.3c0.1,16.8,0.1,33.5,0.2,50.2c-25.9,0-51.8,0-77.7,0c0.1,27.5,0.2,54.9,0.4,82.4  c-16.5,0-32.9,0-49.3,0c0-27.5-0.1-54.9-0.1-82.4c-26.5-0.2-53.1-0.5-79.6-0.7V181C183.7,181.1,210.2,181.2,236.7,181.2z");
TORRE_A.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pl');

var PASO_NORTE_TORRE_A = rsr.path("M285.8,102.7c0-8.7,0-17.3-0.1-25.9c-16.4,0-32.8,0.1-49.2,0.1  c0,8.6,0,17.3,0,25.9C253,102.7,269.4,102.7,285.8,102.7z");
PASO_NORTE_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_po');

var PASO_SUR_TORRE_A = rsr.path("M236.9,314v26.9c16.5-0.1,32.9-0.1,49.3-0.1c0-8.9,0.1-17.8,0.1-26.8");
PASO_SUR_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pp');

var ELEVADORES_TORRE_A = rsr.path("M236.8,181.2c16.4,0.1,32.8,0.1,49.3,0.2c0,16.8-0.1,33.5-0.1,50.2  c-16.3,0-32.7,0-49.1,0C236.8,214.8,236.8,198.1,236.8,181.2z");
ELEVADORES_TORRE_A.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pq');

var LUZ_TORRE_A = rsr.rect(236.6, 163.1, 32.7, 18.1);
LUZ_TORRE_A.attr({x: '236.6',y: '163.1',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '01','stroke-opacity': '1'}).data('id', 'rect_cm');

//!--Torre A

// Torre B

var TORRE_B = rsr.path("M450.4,303.1c0-27.7,0-55.3,0.1-82.9c16.6,0,33.2,0,49.7,0  c0,27.6-0.1,55.2-0.1,82.8c25.9,0.1,51.7,0.1,77.5,0.1c0,16.8,0,33.6,0,50.4c-25.8,0-51.7,0-77.5,0c0,26.5,0,53,0,79.5  c-16.6,0-33.2,0-49.8,0c0-26.5,0-53.1,0-79.6l-78.9-0.8v-49.9L450.4,303.1z");
TORRE_B.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pm');

var PASO_NORTE_TORRE_B = rsr.path("M450.5,220.2c0-8.7,0-17.3,0-25.9c16.6,0,33.1,0.1,49.7,0.1  c0,8.6,0,17.3,0,25.9C483.6,220.2,467,220.2,450.5,220.2z");
PASO_NORTE_TORRE_B.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pr');

var ELEVADORES_TORRE_B = rsr.path("M450.4,303.1v50.2c16.6,0,33.2,0,49.8,0c-0.1-16.8-0.1-33.5-0.1-50.4  C483.5,303.1,466.9,303.1,450.4,303.1z");
ELEVADORES_TORRE_B.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qt');

var BODEGA_TORRE_B = rsr.rect(450.5, 261.7, 19.7, 20.7);
BODEGA_TORRE_B.attr({x: '450.5',y: '261.7',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_lq');

var LUZ_TORRE_B = rsr.rect(450.5, 282.4, 32.4, 20.7);
LUZ_TORRE_B.attr({x: '450.5',y: '282.4',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_ls');

// !--Torre B

// Torre C

var TORRE_C = rsr.path("M686.2,303.2c0-27.6,0-55.2,0-82.8c16.5,0,33,0,49.6,0  c0.1,27.7,0.1,55.3,0.1,83c26.2-0.1,52.4-0.1,78.6-0.2c0.1,16.8,0.2,33.7,0.2,50.4c-26.3,0-52.6,0-78.9,0c0,19.9,0.1,39.8,0.1,59.7  c-16.6,0-33.2,0-49.8,0c0-19.9-0.1-39.7-0.1-59.6c-26.3,0-52.7,0-79,0c0-16.8,0.1-33.7,0.1-50.5C633.6,303.2,660,303.2,686.2,303.2z  ");
TORRE_C.attr({fill: 'none',stroke: 'none',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pn');

var PASO_NORTE_TORRE_C = rsr.path("M686.2,220.2c0-8.7,0-17.3,0-25.9c16.6,0,33.1,0.1,49.7,0.1  c0,8.6,0,17.3,0,25.9C483.6,220.2,467,220.2,450.5,z");
PASO_NORTE_TORRE_C.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pr');

var PASO_SUR_TORRE_C = rsr.path("M 686.2,413.4 686.2,435.5 736,435.5 736.1,413.4  z");
PASO_SUR_TORRE_C.attr({fill: '#ffffff',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_qw');

var ELEVADORES_TORRE_C = rsr.path("M686.1,353.7c0-16.8,0-33.6,0-50.4c16.7,0,33.4,0,50.1,0  c-0.1,16.8-0.1,33.6-0.2,50.4C719.4,353.7,702.7,353.7,686.1,353.7z");
ELEVADORES_TORRE_C.attr({fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'path_pu');

var BODEGA_TORRE_C = rsr.rect(686.2, 261.9, 19.7, 20.7);
BODEGA_TORRE_C.attr({x: '686.2',y: '261.9',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nj');

var LUZ_TORRE_C = rsr.rect(686.2, 282.6, 32.4, 20.7);
LUZ_TORRE_C.attr({x: '686.2',y: '282.6',fill: 'none',stroke: '#202020',"stroke-miterlimit": '10','stroke-width': '0.75','stroke-opacity': '1'}).data('id', 'rect_nl');

// !--Torre C

$( "#C41" ).mouseover(function() {
   CP_41.animate({ fill: '#2096F3' }, 10);
});
$( "#C41" ).mouseout(function() {
   CP_41.animate({ fill: 'none' }, 10);
});

$( "#C42" ).mouseover(function() {
   CP_42.animate({ fill: '#2096F3' }, 10);
});
$( "#C42" ).mouseout(function() {
   CP_42.animate({ fill: 'none' }, 10);
});

$( "#C349" ).mouseover(function() {
   CP_349.animate({ fill: '#2096F3' }, 10);
});
$( "#C349" ).mouseout(function() {
   CP_349.animate({ fill: 'none' }, 10);
});



for (var i = 0; i < rsrGroups.length; i++) {

	// Change Yorkshire's fill colour to gold
    rsrGroups[i].node.setAttribute('fill', 'none');

    // Showing off
    rsrGroups[i].mouseover(function(e){
		this.node.style.opacity = 0.7;
		//document.getElementById('region-name').innerHTML = this.data('region');
	});

	rsrGroups[i].mouseout(function(e){
		this.node.style.opacity = 1;
	});
}
	
});

