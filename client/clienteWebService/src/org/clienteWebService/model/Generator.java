/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clienteWebService.model;

import java.util.Calendar;
import java.util.GregorianCalendar;

/**
 *
 * @author martin
 */
public class Generator {
    
    private static Calendar c;
    
    public static String getCurrentDate(){
        
        c = new GregorianCalendar();
        String day = String.valueOf(c.get(Calendar.DAY_OF_MONTH));
        String month = String.valueOf(c.get(Calendar.MONTH));
        String year = String.valueOf(c.get(c.get(Calendar.YEAR)));
        
        if(Integer.parseInt(day) < 10) day = "0" + day;
        if(Integer.parseInt(month) < 10) month = "0" + month;
        
        return day + "/" + month + "/" + year;
    }
}
