/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('nav li ul').hide().removeClass('sites');
$('nav li ul').hide().removeClass('pdfs');
$('nav li').hover(
  function () {
    $('ul', this).stop().slideDown(500);
  },
  function () {
    $('ul', this).stop().slideUp(500);
  }
);