var dateTo = new Date('2021-10-19').getTime()
var days = document.querySelector('.counter .days')
var hours = document.querySelector('.counter .hours')
var mins = document.querySelector('.counter .mins')
var secs = document.querySelector('.counter .secs')

const leadZero = n => n > 9 ? n : '0' + n

setInterval(() => {
	var left = (dateTo - Date.now()) / 1000
	var daysLeft = Math.floor(left / (3600 * 24))
	days.innerText = leadZero(daysLeft)
	var hoursLeft = Math.floor((left - daysLeft * 24 * 3600) / 3600)
	hours.innerText = leadZero(hoursLeft)
	var minsLeft = Math.floor((left - daysLeft * 24 * 3600 - hoursLeft * 3600) / 60)
	mins.innerText = leadZero(minsLeft)
	var secsLeft = Math.floor(left - daysLeft * 24 * 3600 - hoursLeft * 3600 - minsLeft * 60)
	secs.innerText = leadZero(secsLeft)
}, 1000)