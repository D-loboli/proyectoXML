/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.clienteWebService.model;

/**
 *
 * @author martin
 */
public class Rol {
 
    private byte id;
    private String nombre;

    public Rol(byte id, String nombre) {
        this.id = id;
        this.nombre = nombre;
    }

    public byte getId() {
        return id;
    }

    public String getNombre() {
        return nombre;
    }
}
