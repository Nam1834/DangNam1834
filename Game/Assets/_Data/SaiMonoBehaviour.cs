using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class SaiMonoBehaviour : MonoBehaviour
{
    protected virtual void Start()
    {
        
    }

    protected virtual void Reset()
    {
        this.LoadComponents();
        this.ResetValue();
    }

    protected virtual void Awake()
    {
        this.LoadComponents();
        
    }

    protected virtual void OnEnable()
    {
        // For override
    }
    

    protected virtual void LoadComponents()
    {
        //
    }

    protected virtual void ResetValue()
    {
        // For
    }
}
